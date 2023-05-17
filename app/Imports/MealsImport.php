<?php

namespace App\Imports;

use App\Models\Meal;
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
        $collection->shift();
        $collection = $collection->reject(function ($item) {
            return $item[0] == null;
        });
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

        Meal::whereMonth('effective_date', $collection[0]['effective_date'])->delete();


        foreach ($collection as $item) {
            $meal = new \App\Models\Meal();
            $meal->fill($item);
            $meal->save();
        }
    }
}
