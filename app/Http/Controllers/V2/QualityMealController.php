<?php

namespace App\Http\Controllers\V2;

use Carbon\Carbon;
use App\Models\QualityTask;
use Illuminate\Http\Request;
use App\Exports\QualityMealsExport;
use App\Http\Controllers\Controller;

class QualityMealController extends Controller
{
    public function table()
    {
        return view('v2.data.quility.meals', [
            'title' => '食材/成品採樣資料庫',
        ]);
    }

    public function record()
    {
        return view('v2.data.quility.record.meals', [
            'title' => '食材/成品採樣記錄',
        ]);
    }

    public function export(QualityTask $task)
    {
        $meals = $task->meals;

        $meals->transform(function ($item) use ($task) {
            $item->month = Carbon::create($item->effective_date)->format('Y-m');
            $item->date = $task->task_date;
            return $item;
        });

        return (new QualityMealsExport($meals))->download("$task->task_date" . "_品保採樣.xlsx");
    }
}
