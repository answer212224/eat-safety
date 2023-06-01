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
        if ($this->task->status == 'completed') {
            alert()->error('錯誤', '此任務已完成，無法修改狀態');
            return redirect()->route('task-list');
        }

        if ($this->isCompleted && $this->task->taskUsers->where('is_completed', 0)->count() == 1) {
            $this->task->update(['status' => 'pending_approval']);
        } elseif ($this->isCompleted) {
            $this->task->update(['status' => 'processing']);
        } else {
            $this->task->update(['status' => 'processing']);
        }

        $this->task->taskUsers->where('user_id', auth()->user()->id)->first()->update(['is_completed' => $this->isCompleted]);
    }

    public function render()
    {
        return view('livewire.switch-task-user');
    }
}
