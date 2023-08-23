<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use App\Models\Defect;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TaskHasDefect;
use App\Imports\DefectsImport;
use App\Models\TaskHasClearDefect;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class DefectController extends Controller
{
    public function index()
    {
        // 將資料庫中的 effective_date 欄位的日期格式轉換成 Y-m 格式
        $defects = Defect::get()->transform(function ($item) {
            $item->effective_date = Carbon::create($item->effective_date)->format('Y-m');
            return $item;
        });
        return view('backend.defects.index', [
            'title' => '食安缺失資料',
            'defects' => $defects,
        ]);
    }
    /**
     * 新增食安和清簡的缺失 包含圖片上傳最多兩張
     */
    public function store(Task $task, Request $request)
    {
        $images = [];
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
        $disk = config('filepond.temporary_files_disk');

        foreach ($request->filepond as $file) {
            $path = $filepond->getPathFromServerId($file);
            $file = Storage::disk($disk)->get($path);

            $fileName = Str::random(3) . '.jpg';
            Storage::disk($disk)->put("uploads/$task->id/$fileName", $file);

            $images[] = "uploads/$task->id/$fileName";
        }

        // 如果同一個站台有同樣的缺失，跳出警告訊息
        if ($task->taskHasDefects()->where('restaurant_workspace_id', $request->workspace)->where('defect_id', $request->defect_id)->exists()) {
            $task->update([
                'status' => 'processing',
            ]);
            $task->taskHasDefects()->create([
                'user_id' => auth()->user()->id,
                'defect_id' => $request->defect_id,
                'restaurant_workspace_id' => $request->workspace,
                'images' => $images,
                'is_ignore' => $request->is_ignore ? 1 : 0,
                'memo' => $request->memo,
            ]);
            alert()->warning('請注意', '同樣站台有同樣缺失，缺失已新增');
            // 引導使用者到該任務的缺失列表
            return redirect()->route('task-defect-owner', $task->id);
        } else {
            $task->update([
                'status' => 'processing',
            ]);

            $task->taskHasDefects()->create([
                'user_id' => auth()->user()->id,
                'defect_id' => $request->defect_id,
                'restaurant_workspace_id' => $request->workspace,
                'images' => $images,
                'is_ignore' => $request->is_ignore ? 1 : 0,
                'memo' => $request->memo,
            ]);
            alert()->success('成功', '缺失已新增');
            return back();
        }
    }

    // 清潔檢查稽核缺失新增
    public function clearStore(Task $task, Request $request)
    {
        $path = [];
        $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);
        // 判斷是否有上傳圖片，有的話就取得圖片路徑
        if (isset($request->filepond[0])) {
            // 取得圖片路徑
            $filePath0 = $filepond->getPathFromServerId($request->filepond[0]);
            // 將 \ 轉換成 /
            $filePath0 = Str::of($filePath0)->replace('\\', '/');
            // 將圖片路徑放進 $path 陣列
            array_push($path, $filePath0);
            // 判斷是否有第二張圖片，有的話就取得圖片路徑
            if (isset($request->filepond[1])) {
                // 取得圖片路徑
                $filePath1 = $filepond->getPathFromServerId($request->filepond[1]);
                // 將 \ 轉換成 /
                $filePath1 = Str::of($filePath1)->replace('\\', '/');
                // 將圖片路徑放進 $path 陣列
                array_push($path, $filePath1);
            }
        }

        // 更新任務狀態
        $task->update([
            'status' => 'processing',
        ]);

        // 新增清潔檢查缺失
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

    // 主管食安核對缺失 使用同一個view 回傳不同的資料
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

        // 檢查是否有專案未檢查
        $isProjectAllChecked = $task->projects->every(function ($value, $key) {
            return $value->pivot->is_checked == 1;
        });

        if (!$isProjectAllChecked) {
            alert()->warning('請確認', '尚有專案未檢查，請等待完成後再進行下一步');
            return back();
        }

        // 檢查是否有稽核員未完成稽核
        $isComplete = $task->taskUsers->pluck('is_completed');
        $isComplete = $isComplete->every(function ($value, $key) {
            return $value == 1;
        });

        if (!$isComplete) {
            alert()->warning('請確認', '尚有稽核員未完成稽核，請等待完成後再進行下一步');
            return back();
        }

        // 將缺失依照站台分類
        $defectsGroup = $task->taskHasDefects->groupBy('restaurant_workspace_id');

        return view('backend.tasks.task-defect', [
            'task' => $task,
            'defectsGroup' => $defectsGroup,
            'title' => '主管食安核對缺失'
        ]);
    }

    public function clearShow(Task $task)
    {
        // 檢查是否有餐點未採樣，如未採樣則判斷是否有原因
        $isMealAllTaken = $task->meals->every(function ($value, $key) {
            return $value->pivot->is_taken == 1 || $value->pivot->memo != null;
        });

        if (!$isMealAllTaken) {
            alert()->warning('請確認', '尚有餐點未採樣，請說明原因後再進行下一步');
            return back();
        }

        // 檢查是否有專案未檢查
        $isProjectAllChecked = $task->projects->every(function ($value, $key) {
            return $value->pivot->is_checked == 1;
        });

        if (!$isProjectAllChecked) {
            alert()->warning('請確認', '尚有專案未檢查，請等待完成後再進行下一步');
            return back();
        }

        // 檢查是否有稽核員未完成稽核
        $isComplete = $task->taskUsers->pluck('is_completed');
        $isComplete = $isComplete->every(function ($value, $key) {
            return $value == 1;
        });

        if (!$isComplete) {
            alert()->warning('請確認', '尚有稽核員未完成稽核，請等待完成後再進行下一步');
            return back();
        }

        // 將缺失依照站台分類
        $defectsGroup = $task->taskHasClearDefects->groupBy('restaurant_workspace_id');

        return view('backend.tasks.task-defect', [
            'task' => $task,
            'defectsGroup' => $defectsGroup,
            'title' => '主管清檢核對缺失'
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
            'title' => '編輯食安缺失'
        ]);
    }

    public function clearEdit(TaskHasClearDefect $taskHasDefect)
    {

        if ($taskHasDefect->task->status == 'completed') {
            alert()->warning('請確認', '此任務已完成，無法編輯');
            return back();
        }

        return view('backend.tasks.defects.edit', [
            'taskHasDefect' => $taskHasDefect,
            'title' => '編輯清檢缺失'
        ]);
    }

    // 更新食安缺失
    public function update(TaskHasDefect $taskHasDefect, Request $request)
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

        if (empty($path)) {
            alert()->warning('請確認', '請上傳圖片');
            return back();
        };

        $taskHasDefect->update([
            'defect_id' => $request->defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'is_ignore' => $request->is_ignore ? 1 : 0,
            'images' => $path,
            'memo' => $request->memo,
        ]);

        alert()->success('成功', '食安缺失已更新');
        return back();
    }

    // 更新清檢缺失
    public function clearUpdate(TaskHasClearDefect $taskHasDefect, Request $request)
    {
        if (empty($request->workspace) || empty($request->clear_defect_id) || empty($request->filepond)) {
            alert()->warning('請確認', '請填寫完整資料');
            return redirect();
        }
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

        $taskHasDefect->update([
            'clear_defect_id' => $request->clear_defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'images' => $path,
            'description' => $request->description,
            'is_ignore' => $request->is_ignore ? 1 : 0,
            'amount' => $request->demo3_21,
            'memo' => $request->memo,
        ]);

        alert()->success('成功', '清檢缺失已更新');
        return back();
    }

    // 稽核員刪除食安缺失
    public function delete(TaskHasDefect $taskHasDefect)
    {
        $taskHasDefect->delete();
        alert()->success('成功', '缺失已刪除');
        return redirect()->route('task-list');
    }

    // 稽核員刪除清檢缺失
    public function clearDelete(TaskHasClearDefect $taskHasDefect)
    {
        $taskHasDefect->delete();
        alert()->success('成功', '缺失已刪除');
        return redirect()->route('task-list');
    }

    // 稽核員查看食安缺失
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

    // 稽核員查看清檢缺失
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

    // 匯入食安缺失
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
            alert()->success('成功', '食安缺失匯入成功');
            return back();
        } catch (\Exception $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
        }
    }
}
