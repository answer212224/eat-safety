<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;

class QualityMealsImport implements ToCollection
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

        // 儲存資料
        foreach ($collection as $item) {
            $meal = new \App\Models\QualityMeal();
            $meal->fill($item);
            $meal->save();
        }
    }
}
