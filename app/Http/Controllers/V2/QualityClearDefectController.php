<?php

namespace App\Http\Controllers\V2;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\QualityTaskHasQualityClearDefect;

class QualityClearDefectController extends Controller
{
    public function table()
    {
        return view('v2.data.quility.clear-defects', [
            'title' => '(品保)清檢條文資料庫',
        ]);
    }

    public function record()
    {
        return view('v2.data.quility.record.clear-defects', [
            'title' => '(品保)清潔檢查記錄',
        ]);
    }

    public function chart(Request $request)
    {
        $title = "品保清潔檢查缺失{$request->yearMonth}統計圖表";

        $yearMonth = Carbon::create($request->yearMonth);
        // 取得該月份的任務缺失資料
        $taskHasDefect = QualityTaskHasQualityClearDefect::with('clearDefect')
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

        return view('backend.clear_defects.quality-chart', compact('title', 'series', 'defectGroupByGroupKeys', 'colors'));
    }
}
