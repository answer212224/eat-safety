<?php

namespace App\Imports;

use App\Models\Meal;
use App\Models\Task;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;

class MealsImport implements ToCollection
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
        // 轉換日期格式
        $collection->transform(function ($item) {
            return [
                'effective_date' => Date::excelToDateTimeObject($item[0]),
                'sid' => $item[1],
                'brand' => $item[2],
                'shop' => $item[3],
                'category' => $item[4],
                'chef' => $item[5],
                'workspace' => $item[6],
                'qno' => $item[7],
                'name' => $item[8],
                'note' => $item[9],
                'item' => $item[10],
                'items' => $item[11],
            ];
        });


        // 檢查採樣是否有該月份的稽核任務
        $taskHasMeals =  Task::whereHas('meals', function ($query) use ($collection) {
            $query->whereYear('effective_date', $collection[0]['effective_date'])
                ->whereMonth('effective_date', $collection[0]['effective_date']);
        })->get();

        // 如有該月份的稽核任務，則不可更新該月份的餐點採樣資料
        if ($taskHasMeals->count() > 0) {
            throw new \Exception("已有{$collection[0]['effective_date']->format('Y-m')}月的稽核任務，無法更新{$collection[0]['effective_date']->format('Y-m')}月份的餐點採樣資料");
        }
        // 如無該月份的稽核任務，則可更新該月份的餐點採樣資料
        Meal::whereYear('effective_date', $collection[0]['effective_date'])->whereMonth('effective_date', $collection[0]['effective_date'])->delete();

        // 儲存資料
        foreach ($collection as $item) {
            $meal = new \App\Models\Meal();
            $meal->fill($item);
            $meal->save();
        }
    }
}
