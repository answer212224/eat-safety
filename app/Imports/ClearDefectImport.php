<?php

namespace App\Imports;

use App\Models\Task;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;

class ClearDefectImport implements ToCollection
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
                'main_item' => $item[1],
                'sub_item' => $item[2],
            ];
        });

        // 額外新增2筆資料
        $collection->push(['effective_date' => $collection[0]['effective_date'], 'main_item' => '待確認', 'sub_item' => '待確認', 'deduct_point' => 0]);
        $collection->push(['effective_date' => $collection[0]['effective_date'], 'main_item' => '其他', 'sub_item' => '其他', 'deduct_point' => 0]);

        // 檢查清檢缺失是否有該月份的缺失紀錄
        $taskHasDefects =  Task::whereHas('taskHasClearDefects.ClearDefect', function ($query) use ($collection) {
            $query->whereYear('effective_date', $collection[0]['effective_date'])
                ->whereMonth('effective_date', $collection[0]['effective_date']);
        })->get();

        // 如有該月份的缺失紀錄，則不可更新該月份的食安缺失資料
        if ($taskHasDefects->count() > 0) {
            throw new \Exception("已有{$collection[0]['effective_date']->format('Y-m')}月的缺失紀錄，無法更新{$collection[0]['effective_date']->format('Y-m')}月份的食安缺失資料");
        }

        // 如無該月份的缺失紀錄，則可更新該月份的食安缺失資料
        // 刪除該月份的食安缺失資料
        // \App\Models\ClearDefect::whereYear('effective_date', $collection[0]['effective_date'])->whereMonth('effective_date', $collection[0]['effective_date'])->delete();

        // 新增該月份的食安缺失資料
        foreach ($collection as $item) {
            $defect = new \App\Models\ClearDefect();
            $defect->fill($item);
            $defect->save();
        }
    }
}
