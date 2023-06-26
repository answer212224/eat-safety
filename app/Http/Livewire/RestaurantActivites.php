<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class RestaurantActivites extends Component
{
    public $restaurant;
    public $tasks;

    public function mount($restaurant)
    {
        $this->restaurant = $restaurant;
        // 依照 task_date 降冪排序 取得最近5筆資料
        $this->tasks = $this->restaurant->tasks()->orderBy('task_date', 'desc')->take(5)->get();
        // 將task_date用時間差的方式顯示
        $this->tasks->map(function ($task) {
            $task->task_date = Carbon::create($task->task_date)->diffForHumans();
            return $this->tasks;
        });
    }

    public function viewAll()
    {
        // 依照 task_date 降冪排序 取得所有資料
        $this->tasks = $this->restaurant->tasks()->orderBy('task_date', 'desc')->get();
        // 將task_date用時間差的方式顯示
        $this->tasks->map(function ($task) {
            $task->task_date = Carbon::create($task->task_date)->diffForHumans();
            return $this->tasks;
        });
    }

    public function render()
    {
        return view('livewire.restaurant-activites');
    }
}
