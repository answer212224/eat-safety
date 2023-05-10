<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        $title = '任務清單';
        $tasks = auth()->user()->tasks->load('users')->sortByDesc('id');


        return view('backend.tasks.list', compact('title', 'tasks'));
    }

    public function edit()
    {
        $title = '開始稽核';

        return view('backend.tasks.edit', compact('title'));
    }
}
