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
        foreach ($data['meal_tasks'] as $mealId => $meal) {
            $task->meals()->updateExistingPivot($mealId, [
                'is_taken' => true,
            ]);
        }

        alert()->success('採樣完畢', '採樣成功');

        return redirect()->route('task-list');
    }

    public function projectCheckSubmit(Request $request, Task $task)
    {
        $data = $request->all();

        $task->projects()->update([
            'is_impoved' => false,
        ]);
        foreach ($data['project_tasks'] as $projectId => $project) {
            $task->projects()->updateExistingPivot($projectId, [
                'is_impoved' => true,
            ]);
        }

        alert()->success('專案完畢', '專案成功');

        return redirect()->route('task-list');
    }


    public function assign()
    {
        $title = '指派任務';
        $tasks = Task::all()->load('users');
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

        if (Task::where('task_date', $data['task_date'])->where('restaurant_id', $data['restaurant_id'])->exists()) {
            alert()->warning('無法新增', '已經有相同日期和相同店家的任務');
            return back();
        }

        if (Task::where('task_date', $data['task_date'])->where('category', $data['category'])->where('restaurant_id', $data['restaurant_id'])->exists()) {
            alert()->warning('無法新增', '已經有相同日期和相同類別相同店家的任務');
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
        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user', 'meals']);
        $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');
        return view('backend.tasks.edit', compact('task', 'title', 'defectsGroup'));
    }

    public function sign(Task $task, Request $request)
    {
        $task = $task->load('meals');

        $isMealAllTaken = $task->meals->every(function ($value, $key) {
            return $value->pivot->is_taken == 1;
        });

        if (!$isMealAllTaken) {
            alert()->warning('請確認', '尚有餐點未採樣，請等待完成後再進行下一步');
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

    public function deleteConfirm(Task $task)
    {
        if ($task->status == 'completed' || $task->status == 'processing') {
            alert()->warning('無法刪除', '已經完成和正在進行的任務無法刪除');
            return back();
        }

        $title = '確認刪除?';
        $text = "確認刪除任務: {$task->task_date}{$task->category}-{$task->restaurant->brand}{$task->restaurant->shop}，刪除後無法還原，請確認是否刪除";

        confirmDelete($title, $text);

        return back();
    }

    public function delete(Task $task)
    {
        $task->delete();

        alert()->success('刪除成功', '刪除任務成功');

        return redirect()->route('task-assign');
    }
}
