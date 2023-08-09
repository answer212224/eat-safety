<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $title = '專案資料';
        confirmDelete('確定刪除', "您確定要刪除嗎？\n\n刪除後將無法復原！");
        $projects = Project::all();
        return view('backend.projects.index', compact('title', 'projects'));
    }

    public function store(Request $request)
    {
        Project::create($request->all());

        alert()->success('成功', '專案新增成功');

        return back();
    }

    public function edit(Project $project)
    {
        $title = '專案編輯';

        // $tasks = Task::whereHas('projects', function ($query) use ($project) {
        //     $query->where('project_id', $project->id);
        // })->get();

        // if ($tasks->count() > 0) {
        //     alert()->error('錯誤', '此專案已經被使用，無法編輯');
        //     return back();
        // }

        return view('backend.projects.edit', compact('title', 'project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        alert()->success('成功', '專案編輯成功');

        return redirect()->route('project-index');
    }

    public function destroy(Project $project)
    {
        // 如果有任務使用這個專案執行，就不給刪除
        $tasks = Task::whereHas('projects', function ($query) use ($project) {
            $query->where('project_id', $project->id);
        })->get();

        if ($tasks->count() > 0) {
            alert()->error('錯誤', '此專案已經被使用，無法刪除');
            return back();
        }

        $project->delete();

        alert()->success('成功', '專案刪除成功');

        return back();
    }
}
