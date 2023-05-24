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
}
