<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        $title = '任務清單';
        $tasks = auth()->user()->tasks->load('users')->sortByDesc('id');

        return view('backend.tasks.list', compact('title', 'tasks'));
    }

    public function edit(Task $task)
    {

        $title = '開始稽核';

        return view('backend.tasks.edit', compact('title', 'task'));
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
            $task->user_ids = $task->users->pluck('id')->toArray();
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

        return back();
    }
}
