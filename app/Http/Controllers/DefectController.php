<?php

namespace App\Http\Controllers;

use App\Imports\DefectsImport;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\Defect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TaskHasDefect;
use Maatwebsite\Excel\Facades\Excel;

class DefectController extends Controller
{
    public function index()
    {
        // 這裡的 defects 是一個集合，所以可以使用 transform() 來改變集合裡面的每一個元素
        $defects = Defect::get()->transform(function ($item) {
            $item->effective_date = Carbon::create($item->effective_date)->format('Y-m');
            return $item;
        });
        return view('backend.defects.index', [
            'title' => '缺失資料',
            'defects' => $defects,
        ]);
    }
    public function store(Task $task, Request $request)
    {
        $path = [];

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

        if (empty($request->filepond) || empty($request->workspace) || empty($request->defect_id)) {
            alert()->warning('請確認', '請填寫完整資料');
            return back();
        }


        if ($task->taskHasDefects()->where('restaurant_workspace_id', $request->workspace)->where('defect_id', $request->defect_id)->exists()) {
            $task->update([
                'status' => 'processing',
            ]);
            $task->taskHasDefects()->create([
                'user_id' => auth()->user()->id,
                'defect_id' => $request->defect_id,
                'restaurant_workspace_id' => $request->workspace,
                'images' => $path,
            ]);
            alert()->warning('請注意', '同樣站台有同樣缺失，缺失已新增');
            return redirect()->route('task-defect-owner', $task->id);
        } else {
            $task->update([
                'status' => 'processing',
            ]);

            $task->taskHasDefects()->create([
                'user_id' => auth()->user()->id,
                'defect_id' => $request->defect_id,
                'restaurant_workspace_id' => $request->workspace,
                'images' => $path,
                'is_ignore' => $request->is_ignore ? 1 : 0,
                'memo' => $request->memo,
            ]);
            alert()->success('成功', '缺失已新增');
            return back();
        }
    }

    public function clearStore(Task $task, Request $request)
    {
        $path = [];

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

        if (empty($request->filepond) || empty($request->workspace) || empty($request->clear_defect_id)) {
            alert()->warning('請確認', '請填寫完整資料');
            return back();
        }


        $task->update([
            'status' => 'processing',
        ]);

        $task->taskHasClearDefects()->create([
            'user_id' => auth()->user()->id,
            'clear_defect_id' => $request->clear_defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $path,
            'description' => $request->description,
            'is_ignore' => $request->is_ignore ? 1 : 0,
            'amount' => $request->demo3_21,
            'memo' => $request->memo,
        ]);
        alert()->success('成功', '缺失已新增');
        return back();
    }

    public function show(Task $task)
    {
        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user', 'meals', 'projects']);

        // 檢查是否有餐點未採樣，如未採樣則判斷是否有原因
        $isMealAllTaken = $task->meals->every(function ($value, $key) {
            return $value->pivot->is_taken == 1 || $value->pivot->memo != null;
        });

        if (!$isMealAllTaken) {
            alert()->warning('請確認', '尚有餐點未採樣，請說明原因後再進行下一步');
            return back();
        }

        $isProjectAllChecked = $task->projects->every(function ($value, $key) {
            return $value->pivot->is_checked == 1;
        });

        if (!$isProjectAllChecked) {
            alert()->warning('請確認', '尚有專案未檢查，請等待完成後再進行下一步');
            return back();
        }

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
        // dd($request->all());
        if (empty($request->workspace) || empty($request->defect_id) || empty($request->filepond)) {
            alert()->warning('請確認', '請填寫完整資料');
            return redirect();
        }
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
        return back();
    }

    public function delete(TaskHasDefect $taskHasDefect)
    {
        $taskHasDefect->delete();
        alert()->success('成功', '缺失已刪除');
        return redirect()->route('task-list');
    }

    public function owner(Task $task)
    {
        $task = $task->load(['taskHasDefects.defect', 'taskHasDefects.user', 'meals', 'projects']);

        if ($task->taskUsers->where('user_id', auth()->user()->id)->first()->is_completed) {
            alert()->error('錯誤', '您已經完成該稽核，請取消完成稽核狀態後再開始稽核');
            return back();
        }

        $defectsGroup = $task->taskHasDefects->where('user_id', auth()->user()->id)->groupBy('restaurant_workspace_id');

        return view('backend.tasks.task-defect', [
            'task' => $task,
            'defectsGroup' => $defectsGroup,
            'title' => '查看食安缺失'
        ]);
    }

    public function clearOwner(Task $task)
    {

        if ($task->taskUsers->where('user_id', auth()->user()->id)->first()->is_completed) {
            alert()->error('錯誤', '您已經完成該稽核，請取消完成稽核狀態後再開始稽核');
            return back();
        }

        $defectsGroup = $task->taskHasClearDefects->where('user_id', auth()->user()->id)->groupBy('restaurant_workspace_id');



        return view('backend.tasks.task-defect', [
            'task' => $task,
            'defectsGroup' => $defectsGroup,
            'title' => '查看清檢缺失'
        ]);
    }


    public function import(Request $request)
    {
        if ($request->file('excel') == null) {
            alert()->error('錯誤', '請選擇檔案');
            return back();
        }

        if ($request->file('excel')->getClientOriginalExtension() != 'xlsx') {
            alert()->error('錯誤', '檔案格式錯誤');
            return back();
        }

        try {
            Excel::import(new DefectsImport, request()->file('excel'));
            alert()->success('成功', '餐點採樣匯入成功');
            return back();
        } catch (\Exception $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
        }
    }
}
