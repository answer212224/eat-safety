<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $title = '專案資料';
        $projects = Project::all();
        return view('backend.projects.index', compact('title', 'projects'));
    }

    public function store(Request $request)
    {
        Project::create($request->all());

        alert()->success('成功', '專案新增成功');

        return back();
    }
}
