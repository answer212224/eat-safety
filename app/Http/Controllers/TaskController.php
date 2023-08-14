<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Meal;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function list()
    {
        $title = '任務清單';
        $tasks = optional(auth()->user()->tasks)->load('users');
        if (!empty($tasks)) {
            $tasks = $tasks->sortByDesc('id');
        } elseif (auth()->user()->can('view-all-task')) {
            $tasks = Task::all()->load('users');
        } else {
            $tasks = [];
        }

        return view('backend.tasks.list', compact('title', 'tasks'));
    }

    public function create(Task $task)
    {
        // 如果任務時間不是今日日期，就不能開始稽核，只判斷日期是否為今日日期
        if (Carbon::parse($task->task_date)->format('Y-m-d') != Carbon::today()->format('Y-m-d')) {
            alert()->error('錯誤', '只能在任務日期當天開始稽核');
            return back();
        }

        // 如果該任務已經完成，就不能再開始稽核
        if ($task->taskUsers->where('user_id', auth()->user()->id)->first()->is_completed) {
            alert()->error('錯誤', '您已經完成該稽核，請取消完成稽核狀態後再開始稽核');
            return back();
        }
        $title = '開始稽核';

        return view('backend.tasks.create', compact('title', 'task'));
    }

    public function mealCheck(Task $task)
    {
        // 如果任務時間不是今日日期，就不能開始採樣，只判斷日期是否為今日日期
        // if (Carbon::parse($task->task_date)->format('Y-m-d') != Carbon::today()->format('Y-m-d')) {
        //     alert()->error('錯誤', '只能在任務日期當天開始採樣');
        //     return back();
        // }
        $title = '開始採樣';

        return view('backend.tasks.meals.check', compact('title', 'task'));
    }

    public function projectCheck(Task $task)
    {
        // 如果任務時間不是今日日期，就不能開始專案，只判斷日期是否為今日日期
        // if (Carbon::parse($task->task_date)->format('Y-m-d') != Carbon::today()->format('Y-m-d')) {
        //     alert()->error('錯誤', '只能在任務日期當天開始專案');
        //     return back();
        // }
        $title = '開始專案';

        return view('backend.tasks.projects.check', compact('title', 'task'));
    }


    public function mealCheckSubmit(Request $request, Task $task)
    {

        $data = $request->all();

        $task->meals()->update([
            'is_taken' => false,
        ]);

        if (!empty($data['is_takens'])) {
            $task->meals()->updateExistingPivot($data['is_takens'], [
                'is_taken' => true,
            ]);
        }

        if (!empty($data['memos'])) {
            foreach ($data['memos'] as $meal_id => $memo) {
                $task->meals()->updateExistingPivot($meal_id, [
                    'memo' => $memo,
                ]);
            }
        }

        if ($task->meals()->where('is_taken', false)->exists()) {
            $num = $task->meals()->where('is_taken', false)->count();
            alert()->warning('尚未完成', '尚有' . $num . '個餐點未完成');
        } else {
            alert()->success('採樣完畢', '採樣成功');
        }

        return back();
    }

    public function projectCheckSubmit(Request $request, Task $task)
    {
        $data = $request->all();

        $task->projects()->update([
            'is_checked' => false,
        ]);

        if (!empty($data['projects'])) {
            $task->projects()->updateExistingPivot($data['projects'], [
                'is_checked' => true,
            ]);
        }

        if ($task->projects()->where('is_checked', false)->exists()) {
            $num = $task->projects()->where('is_checked', false)->count();
            alert()->warning('尚未完成', '尚有' . $num . '個專案未完成');
        } else {
            alert()->success('專案完畢', '專案成功');
        }

        return back();
    }


    public function assign()
    {
        $title = '指派任務';
        // 如果有 view-all-task 的權限，就可以看到所有的任務
        if (auth()->user()->can('view-all-task')) {
            $tasks = Task::all()->load('users');
        } else {
            // 否則就只能看到自己的任務
            $tasks = Task::whereHas('users', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->get()->load('users');
        }
        $users = User::all();
        $restaurants = Restaurant::all();

        $tasks->transform(function ($task) {
            // 如果是 pending 就顯示未稽核，如果是 processing 就顯示稽核中，如果是 pending_approval 就顯示待核對，如果是 completed 就顯示已完成
            if ($task->status == 'pending') {
                $status = '未稽核';
            } elseif ($task->status == 'processing') {
                $status = '稽核中';
            } elseif ($task->status == 'pending_approval') {
                $status = '待核對';
            } elseif ($task->status == 'completed') {
                $status = '已完成';
            }

            // 任務的 title 顯示品牌、類別、使用者名稱、任務日期顯示7/9、任務狀態
            $task->title = $task->restaurant->brand_code . $task->restaurant->shop . ' ' . $task->category . ' ' . $task->users->pluck('name')->implode('、') . ' ' . Carbon::parse($task->task_date)->format('n月j日') . ' ' . $status;

            // 任務的 start 顯示任務日期
            $task->start = $task->task_date;
            $task->url = route('task-edit', $task->id);

            return $task;
        });

        return view('backend.tasks.assign', compact('title', 'tasks', 'users', 'restaurants'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['task_date'] = Carbon::parse($data['task_date']);

        // 檢查是否有重複的任務
        foreach ($data['users'] as $userId) {
            $user = User::find($userId);
            // 如果該使用者已經有相同日期和相同店家，就要提醒
            $task = $user->tasks()->whereDate('task_date', $data['task_date']->format('Y-m-d'))->where('restaurant_id', $data['restaurant_id'])->first();
            if ($task) {
                alert()->warning('請確認', $user->name . '在' . Carbon::parse($task->task_date)->format('Y-m-d') . '已經有' . $task->restaurant->brand_code . $task->restaurant->shop . '的任務');
            }

            // 如果該使用者新增的稽核任務的使用者當天有不同地區的任務，就要提醒
            $userTasks = $user->tasks()->whereDate('task_date', $data['task_date']->format('Y-m-d'))->get();
            foreach ($userTasks as $userTask) {
                if ($userTask->restaurant->location != Restaurant::find($data['restaurant_id'])->location) {
                    alert()->warning('請確認', $user->name . '當天有不同地區的任務');
                }
            }
        }

        // 檢查當日是否有相同分店和相同類別的任務
        $task = Task::whereDate('task_date', $data['task_date']->format('Y-m-d'))->where('restaurant_id', $data['restaurant_id'])->where('category', $data['category'])->first();
        if ($task) {
            alert()->warning('請確認', Carbon::parse($task->task_date)->format('Y-m-d') . '已經有' . $task->restaurant->brand_code . $task->restaurant->shop . '的' . $task->category . '任務');
        }

        $task = Task::create([
            'category' => $data['category'],
            'restaurant_id' => $data['restaurant_id'],
            'task_date' => $data['task_date'],
        ]);

        $task->users()->attach($data['users']);

        // 如果有選擇預設餐點，就新增預設餐點
        if (!empty($data['defaltMeals'])) {
            $task->meals()->attach($data['defaltMeals']);
        }

        if (!empty($data['optionMeals'])) {
            $task->meals()->attach($data['optionMeals']);
        }

        if (!empty($data['projects'])) {
            $task->projects()->attach($data['projects']);
        }

        return back();
    }

    public function edit(Task $task)
    {
        $title = '編輯任務';
        $score = 100;
        // 取得role是auditor的使用者
        $users = User::role('auditor')->get();
        $projects = Project::where('status', 1)->get();

        confirmDelete('確認刪除?', "確認刪除任務: {$task->task_date}{$task->category}-{$task->restaurant->brand}{$task->restaurant->shop}，刪除後無法還原，請確認是否刪除");

        // 這邊要先 load 關聯，不然會有 N+1 問題
        $task = $task->load(['taskHasDefects.defect', 'taskHasClearDefects.clearDefect', 'taskHasDefects.user', 'meals']);

        $taskDate = Carbon::create($task->task_date);
        // 取得店家的品牌代號
        $brandSid = Str::substr($task->restaurant->sid, 0, 2);

        // 取得該品牌當月的餐點
        $optionMeals = Meal::whereYear('effective_date', $taskDate)
            ->whereMonth('effective_date', $taskDate)
            ->where('sid', $task->restaurant->sid)
            ->get();

        // 取得該品牌當月的餐點
        $defaltMeals = Meal::whereYear('effective_date', $taskDate)
            ->whereMonth('effective_date', $taskDate)
            ->where('sid', $brandSid)
            ->get();

        // 這邊要用 merge，因為有些店家會有自己的餐點
        $meals = $defaltMeals->merge($optionMeals);

        if ($task->category == '食安及5S') {
            $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');
            // 排除忽略扣分，加總該任務底下所有的缺失扣分
            $sum = $task->taskHasDefects->where('is_ignore', 0)->sum('defect.deduct_point');
            // 扣分
            $score = $score + $sum;
        } else {
            $defectsGroup = $task->taskHasClearDefects->groupBy('restaurant_workspace_id');
            // 排除忽略扣分，加總該任務底下所有的缺失扣分乘上數量
            $sum = $task->taskHasClearDefects->where('is_ignore', 0)->sum(function ($item) {
                return $item->clearDefect->deduct_point * $item->amount;
            });
            // 扣分
            $score = $score + $sum;
        }
        return view('backend.tasks.edit', compact('task', 'title', 'defectsGroup', 'meals', 'score', 'users', 'projects'));
    }

    public function update(Task $task, Request $request)
    {


        $task->users()->sync($request->users);
        $task->projects()->sync($request->projects);
        $task->meals()->sync($request->meals);
        $task->update([
            'status' => $request->status,
        ]);

        // 查看當天所有任務的所有使用者，request.task_date轉成Carbon格式
        $tasks = Task::whereDate('task_date', Carbon::parse($request->task_date))->get();
        // 假如有重複的使用者，跳出該使用者的名字
        $users = $tasks->pluck('users')->flatten()->pluck('name')->duplicates();
        // 如果有重複的使用者，跳出警告
        if ($users->count() > 0) {
            alert()->warning('請確認', Carbon::parse($request->task_date)->format('Y-m-d') . '已經有' . $users->implode('、') . '的任務');
        }

        return back();
    }

    public function sign(Task $task, Request $request)
    {
        if ($task->status == 'completed') {
            alert()->warning('無法簽名', '任務已經完成');
            return back();
        }

        $task->update([
            'outer_manager' => $request->outer_manager,
            'inner_manager' => $request->inner_manager,
            'status' => 'completed',
        ]);

        alert()->success('核對完畢', '簽名成功');

        return redirect()->route('task-list');
    }

    public function destroy(Task $task)
    {
        if ($task->status == 'completed' || $task->status == 'processing' || $task->status == 'pending_approval') {
            alert()->warning('無法刪除', '已經開始執行的任務無法刪除');
            return back();
        }
        $task->delete();

        alert()->success('刪除成功', '刪除任務成功');

        return redirect()->route('task-assign');
    }

    public function getUnassignedStores(Request $request)
    {
        return response()->json([
            'stores' => Restaurant::where('status', 1)->whereDoesntHave('tasks', function ($query) use ($request) {
                $query->whereYear('task_date', $request->year)->whereMonth('task_date', $request->month);
            })->get(),
            'year' => $request->year,
            'month' => $request->month,
        ]);
    }
}
