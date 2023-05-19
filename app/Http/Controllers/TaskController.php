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

    public function assign()
    {
        $title = '指派任務';
        $users = User::all();
        $restaurants = Restaurant::all();
        $tasks = Task::all()->load('users');

        $tasks->transform(function ($task) {
            $task->title = $task->category . ' - ' . $task->restaurant->brand . ' - ' . $task->restaurant->shop;
            $task->start = $task->task_date;
            $task->users = $task->users->pluck('name', 'id')->toArray();

            return $task;
        });

        return view('backend.tasks.assign', compact('title', 'users', 'restaurants', 'tasks'));
    }

    public function store(Request $request)
    {
        $data = $request->all();


        $task = Task::create([
            'category' => $data['category'],
            'restaurant_id' => $data['restaurant_id'],
            'task_date' => $data['task_date'],
        ]);

        $task->users()->attach($data['users']);
        // $task->projects()->attach($data['projects']);


        return back();
    }

    public function sign(Task $task, Request $request)
    {
        $task->update([
            'outer_manager' => $request->outer_manager,
            'inner_manager' => $request->inner_manager,
            'status' => 'completed',
        ]);

        alert()->success('核對完畢', '簽名成功');

        return redirect()->route('task-list');
    }
}
