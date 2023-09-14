<?php

namespace App\Http\Controllers;

use App\Models\Defect;
use App\Models\Task;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $title = '專案資料庫';
        confirmDelete('確定刪除', "您確定要刪除嗎？\n\n刪除後將無法復原！");
        $projects = Project::all();
        // 取得食安缺失資料庫group是專案查核的資料 title不要重複
        $defects = Defect::where('group', '專案查核')->get();

        $defectTitles = $defects->pluck('title')->unique()->toArray();

        $defectbackAndfront = [];

        // 每個defectTitle分別加上(內場)和(外場)字串
        foreach ($defectTitles as $key => $defectTitle) {
            $defectbackAndfront[] = '(內場)' . $defectTitle;
        }
        foreach ($defectTitles as $key => $defectTitle) {
            $defectbackAndfront[] = '(外場)' . $defectTitle;
        }

        return view('backend.projects.index', compact('title', 'projects', 'defectbackAndfront'));
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
        // 取得食安缺失資料庫group是專案查核的資料 title不要重複
        $defects = Defect::where('group', '專案查核')->get();

        $defectTitles = $defects->pluck('title')->unique()->toArray();

        $defectbackAndfront = [];

        // 每個defectTitle分別加上(內場)和(外場)字串
        foreach ($defectTitles as $key => $defectTitle) {
            $defectbackAndfront[] = '(內場)' . $defectTitle;
        }
        foreach ($defectTitles as $key => $defectTitle) {
            $defectbackAndfront[] = '(外場)' . $defectTitle;
        }


        // $tasks = Task::whereHas('projects', function ($query) use ($project) {
        //     $query->where('project_id', $project->id);
        // })->get();

        // if ($tasks->count() > 0) {
        //     alert()->error('錯誤', '此專案已經被使用，無法編輯');
        //     return back();
        // }

        return view('backend.projects.edit', compact('title', 'project', 'defectbackAndfront'));
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
