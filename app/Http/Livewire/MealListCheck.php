<?php

namespace App\Http\Livewire;

use App\Models\Meal;
use Livewire\Component;

class MealListCheck extends Component
{
    public $task;
    public $meal;

    public function change(Meal $meal, $isTaken)
    {

        $this->task->meals()->updateExistingPivot($meal->id, [
            'is_taken' => !$isTaken,
        ]);
    }


    public function render()
    {
        return view('livewire.meal-list-check', [
            'task' => $this->task,
        ]);
    }
}
