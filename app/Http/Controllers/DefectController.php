<?php

namespace App\Http\Controllers;


use App\Models\Task;
use App\Models\Defect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TaskHasDefect;

class DefectController extends Controller
{
    public function index()
    {
        return view('backend.defects.index', [
            'title' => '缺失資料',
            'defects' => Defect::all(),
        ]);
    }
    public function store(Task $task, Request $request)
    {
        $path = [];
        // Get the temporary path using the serverId returned by the upload function in `FilepondController.php`
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);

        if (isset($request->filepond[0])) {
            $filePath0 = $filepond->getPathFromServerId($request->filepond[0]);
            $filePath0 = Str::of($filePath0)->replace('\\', '/');
            array_push($path, $filePath0);
            if (isset($request->filepond[1])) {
                $filePath1 = $filepond->getPathFromServerId($request->filepond[1]);
                $filePath1 = Str::of($filePath1)->replace('\\', '/');
                array_push($path, $filePath1);
            }
        }

        $task->update([
            'status' => 'processing',
        ]);

        $task->taskHasDefects()->create([
            'user_id' => auth()->user()->id,
            'defect_id' => $request->defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $path,
        ]);

        alert()->success('成功', '缺失已新增');

        return back();
    }

    public function show(Task $task)
    {

        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user', 'meals']);

        $isComplete = $task->taskUsers->pluck('is_completed');
        $isComplete = $isComplete->every(function ($value, $key) {
            return $value == 1;
        });




        if (!$isComplete) {
            alert()->warning('請確認', '尚有稽核員未完成稽核，請等待完成後再進行下一步');
            return back();
        }

        $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');

        return view('backend.tasks.task-defect', [
            'task' => $task,
            'defectsGroup' => $defectsGroup,
            'title' => '主管核對缺失'
        ]);
    }

    public function edit(TaskHasDefect $taskHasDefect)
    {
        if ($taskHasDefect->task->status == 'completed') {
            alert()->warning('請確認', '此任務已完成，無法編輯');
            return back();
        }

        return view('backend.tasks.defects.edit', [
            'taskHasDefect' => $taskHasDefect,
            'title' => '編輯缺失'
        ]);
    }

    public function update(TaskHasDefect $taskHasDefect, Request $request)
    {
        $path = [];
        // Get the temporary path using the serverId returned by the upload function in `FilepondController.php`
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);

        if (isset($request->filepond[0])) {
            $filePath0 = $filepond->getPathFromServerId($request->filepond[0]);
            $filePath0 = Str::of($filePath0)->replace('\\', '/');
            array_push($path, $filePath0);
            if (isset($request->filepond[1])) {
                $filePath1 = $filepond->getPathFromServerId($request->filepond[1]);
                $filePath1 = Str::of($filePath1)->replace('\\', '/');
                array_push($path, $filePath1);
            }
        }

        $taskHasDefect->update([
            'defect_id' => $request->defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $path,
        ]);

        alert()->success('成功', '缺失已更新');
        return redirect()->route('task-defect-show', $taskHasDefect->task_id);
    }

    public function delete(TaskHasDefect $taskHasDefect)
    {
        $taskHasDefect->delete();
        alert()->success('成功', '缺失已刪除');
        return redirect()->route('task-defect-show', $taskHasDefect->task_id);
    }
}
