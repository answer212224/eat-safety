<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskMealController extends Controller
{
    public function index(Request $request)
    {
        $title = '稽核採樣紀錄';
        $dateRange = $request->input('date-range');
        // 假設有選擇日期區間
        if ($dateRange) {

            $range = explode(' 至 ', $dateRange);

            if (count($range) == 2) {
                $dateStart = $range[0];
                $dateEnd = $range[1];
            } else {

                $dateStart = $range[0];
                $dateEnd = $range[0];
            }
            // dateEnd +1 day
            $dateEnd = date('Y-m-d', strtotime($dateEnd . ' +1 day'));
            $tasks = Task::whereBetween('task_date', [$dateStart, $dateEnd])->get();
        } else {
            $tasks = Task::get();
        }

        return view('backend.task-meals.index', compact('title', 'tasks', 'dateRange'));
    }
}
