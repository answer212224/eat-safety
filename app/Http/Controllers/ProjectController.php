<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $title = '專案列表';
        return view('backend.projects.index', compact('title'));
    }
}
