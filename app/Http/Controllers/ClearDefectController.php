<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Imports\ClearDefectImport;
use App\Models\TaskHasClearDefect;
use Maatwebsite\Excel\Facades\Excel;

class ClearDefectController extends Controller
{
    public function index()
    {
        $title = '清檢缺失資料庫';
        return view('backend.clear_defects.index', [
            'title' => $title,
            'clearDefects' => \App\Models\ClearDefect::get(),
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
        $title = "清檢缺失{$request->yearMonth}統計圖表";

        $yearMonth = Carbon::create($request->yearMonth);
        // 取得該月份的任務缺失資料
        $taskHasDefect = TaskHasClearDefect::with('clearDefect')
            ->whereYear('created_at', $yearMonth->year)
            ->whereMonth('created_at', $yearMonth->month)
            ->where('is_ignore', 0)
            ->where('is_not_reach_deduct_standard', 0)
            ->where('is_suggestion', 0)
            ->get();

        // taskHasDefect 使用 clearDefect.main_item 分類
        $defectGroupByGroup = $taskHasDefect->groupBy('clearDefect.main_item');
        // 取得key值
        $defectGroupByGroupKeys = $defectGroupByGroup->keys();

        // taskHasDefect 使用 clearDefect.sub_item 分類
        $defectGroupByTitle = $taskHasDefect->groupBy('clearDefect.sub_item');

        // defectGroupByTitle 依照 defectGroupByGroup裡面的key分類,第0個為[1,0,0,0,0]
        $defectGroupByTitle = $defectGroupByTitle->map(function ($item, $key) use ($defectGroupByGroupKeys) {
            $defectGroupByTitleValues = array_fill(0, $defectGroupByGroupKeys->count(), 0);
            foreach ($item as $value) {
                $defectGroupByTitleValues[$defectGroupByGroupKeys->search($value->clearDefect->main_item)]++;
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

        return view('backend.clear_defects.chart', compact('title', 'series', 'defectGroupByGroupKeys', 'colors'));
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
            Excel::import(new ClearDefectImport, request()->file('excel'));
            alert()->success('成功', '清檢缺失資料匯入成功');
            return back();
        } catch (\Exception $e) {
            alert()->error('錯誤', $e->getMessage());
            return back();
        }
    }

    /**
     * 手動新增清檢缺失
     */
    public function manualStore(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'main_item' => 'required',
                'sub_item' => 'required',
                'effective_date' => 'required',
            ]);

            $validatedData['effective_date'] = Carbon::create($validatedData['effective_date']);

            \App\Models\ClearDefect::create($validatedData);

            alert()->success('成功', '清檢缺失資料新增成功');
            return back();
        } catch (\Exception $e) {

            alert()->error('錯誤', $e->getMessage());
            return back();
        }
    }

    /**
     * 清檢缺失紀錄
     */
    public function records(Request $request)
    {
        $dateRange = $request->input('date-range');
        if ($dateRange) {
            $range = explode(' 至 ', $dateRange);

            if (count($range) == 2) {
                $dateStart = $range[0];
                $dateEnd = $range[1];
            } else {

                $dateStart = $range[0];
                $dateEnd = $range[0];
            }

            // dateEnd +1 day
            $dateEnd = date('Y-m-d', strtotime($dateEnd . ' +1 day'));
            $defectRecords = TaskHasClearDefect::with('clearDefect', 'task', 'restaurantWorkspace.restaurant', 'user')
                ->whereBetween('created_at', [$dateStart, $dateEnd])
                ->get();
        } else {
            $defectRecords = TaskHasClearDefect::with('clearDefect', 'task', 'restaurantWorkspace.restaurant', 'user')->get();
        }


        return view('backend.clear_defects.records', [
            'title' => '清檢缺失紀錄',
            'defectRecords' => $defectRecords,
            'dateRange' => $dateRange,
        ]);
    }
}
