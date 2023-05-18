<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;

class DefectController extends Controller
{
    public function store(Task $task, Request $request)
    {
        $path = [];
        // Get the temporary path using the serverId returned by the upload function in `FilepondController.php`
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);

        if (isset($request->filepond[0])) {
            array_push($path, $filepond->getPathFromServerId($request->filepond[0]));
            if (isset($request->filepond[1])) {
                array_push($path, $filepond->getPathFromServerId($request->filepond[1]));
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

        return back();
    }

    public function show(Task $task)
    {

        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user']);

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
}
