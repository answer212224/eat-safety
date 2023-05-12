<?php

namespace App\Http\Controllers;


use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $task->taskHasDefects()->create([
            'defect_id' => $request->defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $path,
        ]);

        return back();
    }
}
