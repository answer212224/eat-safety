<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        return view('backend.tasks.list', ['title' => 'Table one']);
    }
}
