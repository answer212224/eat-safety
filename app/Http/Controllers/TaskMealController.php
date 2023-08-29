<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskMealController extends Controller
{
    public function index(Request $request)
    {
        $title = '稽核採樣資料';
        $dateRange = $request->input('date-range');
        if ($dateRange) {
            $range = explode(' 至 ', $dateRange);
            $dateStart = $range[0];
            $dateEnd = $range[1];
            // dateEnd +1 day
            $dateEnd = date('Y-m-d', strtotime($dateEnd . ' +1 day'));
            $tasks = Task::whereBetween('task_date', [$dateStart, $dateEnd])->get();
        } else {
            $tasks = Task::get();
        }

        return view('backend.task-meals.index', compact('title', 'tasks', 'dateRange'));
    }
}
