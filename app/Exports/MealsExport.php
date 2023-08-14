<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;



class MealsExport implements FromCollection, WithHeadings, WithMapping
{
    use Exportable;

    protected $meals;

    public function __construct($meals)
    {
        $this->meals = $meals;
    }

    public function collection()
    {
        return $this->meals;
    }

    public function map($meals): array
    {
        return [
            $meals->month,
            $meals->date,
            $meals->brand,
            $meals->shop,
            $meals->category,
            $meals->chef,
            $meals->workspace,
            $meals->qno,
            $meals->name,
            $meals->note,
            $meals->items,
            $meals->item,
        ];
    }

    // 月份 日期 品牌 店別 類別 廚別 區站 編號 名稱 備註 檢項 檢驗項目
    public function headings(): array
    {
        return [
            '月份',
            '日期',
            '品牌',
            '店別',
            '類別',
            '廚別',
            '區站',
            '編號',
            '名稱',
            '備註',
            '檢項',
            '檢驗項目',
        ];
    }
}
