<?php

namespace App\Imports;

use App\Models\Task;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;

class DefectsImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // 移除第一行
        $collection->shift();
        // 移除空白行
        $collection = $collection->reject(function ($item) {
            return $item[0] == null;
        });

        // 轉換資料
        $collection->transform(function ($item) {
            return [
                'effective_date' => Date::excelToDateTimeObject($item[0]),
                'group' => $item[1],
                'title' => $item[2],
                'category' => $item[3],
                'description' => $item[4],
                'deduct_point' => $item[5],
                'report_description' => $item[6],
            ];
        });

        // 額外新增2筆資料
        $collection->push(['effective_date' => $collection[0]['effective_date'], 'group' => '待確認', 'title' => '待確認', 'category' => '待確認', 'description' => '待確認', 'deduct_point' => 0, 'report_description' => '待確認']);
        $collection->push(['effective_date' => $collection[0]['effective_date'], 'group' => '待確認', 'title' => '待確認', 'category' => '待確認', 'description' => '其他', 'deduct_point' => 0, 'report_description' => '其他']);

        // 檢查食安缺失是否有該月份的稽核任務
        $taskHasDefects =  Task::whereHas('taskHasDefects.defect', function ($query) use ($collection) {
            $query->whereYear('effective_date', $collection[0]['effective_date'])
                ->whereMonth('effective_date', $collection[0]['effective_date']);
        })->get();

        // 如有該月份的稽核任務，則不可更新該月份的食安缺失資料
        if ($taskHasDefects->count() > 0) {
            throw new \Exception("已有{$collection[0]['effective_date']->format('Y-m')}月的稽核任務，無法更新{$collection[0]['effective_date']->format('Y-m')}月份的食安缺失資料");
        }

        // 如無該月份的稽核任務，則可更新該月份的食安缺失資料
        \App\Models\Defect::whereYear('effective_date', $collection[0]['effective_date'])->whereMonth('effective_date', $collection[0]['effective_date'])->delete();

        // 儲存資料
        foreach ($collection as $item) {
            $defect = new \App\Models\Defect();
            $defect->fill($item);
            $defect->save();
        }
    }
}
