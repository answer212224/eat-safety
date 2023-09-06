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
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Sopamo\LaravelFilepond\Exceptions\InvalidPathException;


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
     * 新增食安的缺失 包含圖片上傳最多兩張
     * @param Task $task
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws Sopamo\LaravelFilepond\Exceptions\InvalidPathException
     */
    public function store(Task $task, Request $request)
    {
        try {
            $images = [];
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);

            foreach ($request->filepond as $file) {

                $filepondPath = $filepond->getPathFromServerId($file);
                $originalImagePath = public_path('storage/' . $filepondPath);

                $image = Image::make($originalImagePath);
                // 修正圖片方向
                $image->orientate();
                // 壓縮圖片
                $image->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $fileName = Str::random(3) . '_' . $task->id . '_' . now()->format('Ymdhis') . '.jpg';

                $filePath = storage_path("app/public/uploads/" . $fileName);

                $image->save($filePath, 60);

                $images[] = "uploads/$fileName";
            }
        } catch (InvalidPathException $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
        }

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

    /**
     * 新增清檢的缺失 包含圖片上傳最多兩張
     * @param Task $task
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws Sopamo\LaravelFilepond\Exceptions\InvalidPathException
     */
    public function clearStore(Task $task, Request $request)
    {
        try {
            $images = [];
            $filepond = app(\Sopamo\LaravelFilepond\Filepond::class);


            foreach ($request->filepond as $file) {

                $filepondPath = $filepond->getPathFromServerId($file);
                $originalImagePath = public_path('storage/' . $filepondPath);

                $image = Image::make($originalImagePath);
                // 修正圖片方向
                $image->orientate();
                // 壓縮圖片
                $image->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $fileName = Str::random(3) . '_' . $task->id . '_' . now()->format('Ymdhis') . '.jpg';

                $filePath = storage_path("app/public/uploads/" . $fileName);

                $image->save($filePath, 60);

                $images[] = "uploads/$fileName";
            }
        } catch (InvalidPathException $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
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
            'images' => $images,
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
        if (empty($request->workspace) || empty($request->defect_id)) {
            alert()->warning('請確認', '請填寫完整資料');
            return redirect();
        }
        $taskHasDefect->update([
            'defect_id' => $request->defect_id,
            'restaurant_workspace_id' => $request->workspace,
            'is_ignore' => $request->is_ignore ? 1 : 0,
            'memo' => $request->memo,
        ]);

        alert()->success('成功', '食安缺失已更新');
        return back();
    }

    // 更新清檢缺失
    public function clearUpdate(TaskHasClearDefect $taskHasDefect, Request $request)
    {
        if (empty($request->workspace) || empty($request->clear_defect_id)) {
            alert()->warning('請確認', '請填寫完整資料');
            return redirect();
        }

        $taskHasDefect->update([
            'clear_defect_id' => $request->clear_defect_id,
            'restaurant_workspace_id' => $request->workspace,
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

    /**
     * 查看每月稽核缺失統計圖表
     * @param Request $request
     * @see https://www.highcharts.com/demo/column-basic
     * @return \Illuminate\Http\Response
     */
    public function chart(Request $request)
    {
        $title = "食安缺失{$request->yearMonth}統計圖表";

        $yearMonth = Carbon::create($request->yearMonth);
        // 取得該月份的任務缺失資料
        $taskHasDefect = TaskHasDefect::with('defect')
            ->whereYear('created_at', $yearMonth->year)
            ->whereMonth('created_at', $yearMonth->month)
            ->get();
        // taskHasDefect 使用 defect.group 分類
        $defectGroupByGroup = $taskHasDefect->groupBy('defect.group');
        // 取得key值
        $defectGroupByGroupKeys = $defectGroupByGroup->keys();

        // taskHasDefect 使用 defect.title 分類
        $defectGroupByTitle = $taskHasDefect->groupBy('defect.title');
        // defectGroupByTitle 依照 defectGroupByGroup裡面的key分類,第0個為[1,0,0,0,0]
        $defectGroupByTitle = $defectGroupByTitle->map(function ($item, $key) use ($defectGroupByGroupKeys) {
            $defectGroupByTitleValues = array_fill(0, $defectGroupByGroupKeys->count(), 0);
            foreach ($item as $value) {
                $defectGroupByTitleValues[$defectGroupByGroupKeys->search($value->defect->group)]++;
            }
            return $defectGroupByTitleValues;
        });

        // $defectGroupByTitle有幾種就隨機給幾種隨機的顏色
        $colors = [];
        foreach ($defectGroupByTitle as $key => $value) {
            // 使用faker取得隨機色碼
            $colors[] = fake()->hexColor();
        }

        // 轉成series格式
        $series = [];
        foreach ($defectGroupByTitle as $key => $value) {
            $series[] = [
                'name' => $key,
                'data' => $value
            ];
        }

        return view('backend.defects.chart', compact('title', 'series', 'defectGroupByGroupKeys', 'colors'));
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

    /**
     * 手動新增食安缺失
     */
    public function manualStore(Request $request)
    {
        $validatedData = $request->validate([
            'effective_date' => 'required',
            'group' => 'required',
            'title' => 'required',
            'category' => 'required',
            'deduct_point' => 'required',
            'description' => 'required',
            'report_description' => 'required',
        ]);


        $validatedData['effective_date'] = Carbon::create($validatedData['effective_date']);

        Defect::create($validatedData);

        alert()->success('成功', '食安缺失新增成功');
        return back();
    }
}
