<?php

namespace App\Http\Controllers\V2;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\QualityTaskHasQualityDefect;

class QualityDefectController extends Controller
{
    public function table()
    {
        return view('v2.data.quility.defects', [
            'title' => '(品保)食安條文資料庫',
        ]);
    }

    public function record()
    {
        return view('v2.data.quility.record.defects', [
            'title' => '(品保)食安巡檢記錄',
        ]);
    }


    public function chart(Request $request)
    {
        $title = "品保食安缺失{$request->yearMonth}統計圖表";

        $yearMonth = Carbon::create($request->yearMonth);
        // 取得該月份的任務缺失資料
        $taskHasDefect = QualityTaskHasQualityDefect::with('defect')
            ->whereYear('created_at', $yearMonth->year)
            ->whereMonth('created_at', $yearMonth->month)
            ->where('is_ignore', 0)
            ->where('is_not_reach_deduct_standard', 0)
            ->where('is_suggestion', 0)
            ->where('is_repeat', 0)
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

        return view('backend.defects.quality-chart', compact('title', 'series', 'defectGroupByGroupKeys', 'colors'));
    }
}
