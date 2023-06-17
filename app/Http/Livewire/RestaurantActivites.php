<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class RestaurantActivites extends Component
{
    public $restaurant;

    public function render()
    {
        // 依照 task_date 降冪排序 取得最近10筆資料
        $tasks = $this->restaurant->tasks()->orderBy('task_date', 'desc')->take(10)->get();
        // 將task_date用時間差的方式顯示
        $tasks->map(function ($task) {
            $task->task_date = Carbon::create($task->task_date)->diffForHumans();
            return $task;
        });

        return view('livewire.restaurant-activites', compact('tasks'));
    }
}
