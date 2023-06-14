<?php

namespace App\Imports;

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
        // TODO 還沒做判斷是否可以匯入的判斷
        // 儲存資料
        foreach ($collection as $item) {
            $defect = new \App\Models\ClearDefect();
            $defect->fill($item);
            $defect->save();
        }
    }
}
