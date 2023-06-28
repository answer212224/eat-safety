<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Meal;
use App\Models\Task;
use App\Models\User;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function list()
    {
        $title = '任務清單';
        // 中文解釋：如果 auth()->user()->tasks 不是空的，就執行 load('users')，否則就給空陣列
        $tasks = optional(auth()->user()->tasks)->load('users');
        if (!empty($tasks)) {
            $tasks = $tasks->sortByDesc('id');
        } else {
            $tasks = [];
        }

        return view('backend.tasks.list', compact('title', 'tasks'));
    }

    public function create(Task $task)
    {
        if ($task->taskUsers->where('user_id', auth()->user()->id)->first()->is_completed) {
            alert()->error('錯誤', '您已經完成該稽核，請取消完成稽核狀態後再開始稽核');
            return back();
        }
        $title = '開始稽核';

        return view('backend.tasks.create', compact('title', 'task'));
    }

    public function mealCheck(Task $task)
    {
        $title = '開始採樣';

        return view('backend.tasks.meals.check', compact('title', 'task'));
    }



    public function projectCheck(Task $task)
    {
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
            if ($task->status == 'pending') {
                $status = '未稽核';
            } elseif ($task->status == 'processing') {
                $status = '稽核中';
            } elseif ($task->status == 'pending_approval') {
                $status = '待核對';
            } elseif ($task->status == 'completed') {
                $status = '已完成';
            }
            $task->title = $task->restaurant->sid . ' ' . $task->category . ' ' . $task->users->pluck('name')->implode('、') . ' ' . Carbon::parse($task->task_date)->format('m/d') . ' ' . $status;
            $task->start = $task->task_date;
            // $task->users = $task->users->pluck('name', 'id')->toArray();
            $task->url = route('task-edit', $task->id);

            return $task;
        });

        return view('backend.tasks.assign', compact('title', 'tasks', 'users', 'restaurants'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['task_date'] = Carbon::parse($data['task_date']);

        foreach ($data['users'] as $userId) {
            $user = User::find($userId);
            // 如果該使用者已經有相同日期和相同店家和相同類別的任務，就不能新增
            if ($user->tasks()->whereDate('task_date', $data['task_date'])->where('category', $data['category'])->where('restaurant_id', $data['restaurant_id'])->exists()) {
                alert()->warning('無法新增', $user->name . '相同日期和相同店家和相同類別的任務');
                return back();
            }

            // 如果該使用者新增的稽核任務的使用者當天有不同地區的任務，就要提醒
            $userTasks = $user->tasks()->whereDate('task_date', $data['task_date'])->get();
            foreach ($userTasks as $userTask) {

                if ($userTask->restaurant->location != Restaurant::find($data['restaurant_id'])->location) {
                    alert()->info('請確認', $user->name . '當天有不同地區的任務');
                }
            }
        }

        $task = Task::create([
            'category' => $data['category'],
            'restaurant_id' => $data['restaurant_id'],
            'task_date' => $data['task_date'],
        ]);

        $task->users()->attach($data['users']);

        if (!empty($data['defaltMeals'])) {
            $task->meals()->attach($data['defaltMeals']);
        }

        if (!empty($data['optionMeals'])) {
            $task->meals()->attach($data['optionMeals']);
        }

        if (!empty($data['projects'])) {
            $task->projects()->attach($data['projects']);
        }

        return redirect()->route('task-edit', $task->id);
    }

    public function edit(Task $task)
    {
        $title = '編輯任務';

        confirmDelete('確認刪除?', "確認刪除任務: {$task->task_date}{$task->category}-{$task->restaurant->brand}{$task->restaurant->shop}，刪除後無法還原，請確認是否刪除");

        // 這邊要先 load 關聯，不然會有 N+1 問題
        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user', 'meals']);

        $taskDate = Carbon::create($task->task_date);

        $brandSid = Str::substr($task->restaurant->sid, 0, 3);

        $optionMeals = Meal::whereYear('effective_date', $taskDate)
            ->whereMonth('effective_date', $taskDate)
            ->where('sid', $task->restaurant->sid)
            ->get();

        $defaltMeals = Meal::whereYear('effective_date', $taskDate)
            ->whereMonth('effective_date', $taskDate)
            ->where('sid', $brandSid)
            ->get();

        // 這邊要用 merge，因為有些店家會有自己的餐點
        $meals = $defaltMeals->merge($optionMeals);

        // 這邊要用 groupBy，因為同一個區站會有多個缺陷
        $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');
        return view('backend.tasks.edit', compact('task', 'title', 'defectsGroup', 'meals'));
    }

    public function update(Task $task, Request $request)
    {
        // 更新任務的餐點
        $meals = $request->input('meals');

        // 如果沒有選擇餐點，就不更新
        $task->meals()->sync($meals);
        $task->update([
            'status' => $request->status,
        ]);

        alert()->success('更新成功', '更新任務成功');

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
}
