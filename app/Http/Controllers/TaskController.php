<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Restaurant;
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

        if (!empty($data['meals'])) {
            $task->meals()->updateExistingPivot($data['meals'], [
                'is_taken' => true,
            ]);
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

        if (auth()->user()->role == 'admin' || auth()->user()->role == 'super-admin') {
            $tasks = Task::all()->load('users');
        } else {
            $tasks = Task::whereHas('users', function ($query) {
                $query->where('user_id', auth()->user()->id);
            })->get()->load('users');
        }
        $users = User::all();
        $restaurants = Restaurant::all();

        $tasks->transform(function ($task) {
            $task->title = $task->category . '-' . $task->restaurant->brand . $task->restaurant->shop;
            $task->start = $task->task_date;
            $task->users = $task->users->pluck('name', 'id')->toArray();
            $task->url = route('task-edit', $task->id);

            return $task;
        });

        return view('backend.tasks.assign', compact('title', 'tasks', 'users', 'restaurants'));
    }

    public function store(Request $request)
    {
        $data = $request->all();


        foreach ($data['users'] as $userId) {
            $user = User::find($userId);

            if ($user->tasks()->where('task_date', $data['task_date'])->where('restaurant_id', $data['restaurant_id'])->exists()) {
                alert()->warning('無法新增', $user->name . '相同日期和相同店家的任務');
                return back();
            }
        }

        if (Task::where('task_date', $data['task_date'])->where('category', $data['category'])->where('restaurant_id', $data['restaurant_id'])->exists()) {
            alert()->warning('無法新增', '已有相同日期和相同類別相同店家的任務');
            return back();
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


        return back();
    }

    public function edit(Task $task)
    {
        $title = '編輯任務';

        confirmDelete('確認刪除?', "確認刪除任務: {$task->task_date}{$task->category}-{$task->restaurant->brand}{$task->restaurant->shop}，刪除後無法還原，請確認是否刪除");

        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user', 'meals']);
        $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');
        return view('backend.tasks.edit', compact('task', 'title', 'defectsGroup'));
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
