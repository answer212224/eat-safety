<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchTaskUser extends Component
{
    public $isCompleted;
    public $task;

    public function mount()
    {
        $this->isCompleted = $this->task->taskUsers->where('user_id', auth()->user()->id)->first()->is_completed;
    }

    public function toggleIsCompleted()
    {
        $this->task->taskUsers->where('user_id', auth()->user()->id)->first()->update(['is_completed' => $this->isCompleted]);
    }

    public function render()
    {
        return view('livewire.switch-task-user');
    }
}
