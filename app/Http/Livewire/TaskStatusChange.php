<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskStatusChange extends Component
{
    public $task;

    public function changeToPendingApproval()
    {
        if ($this->task->status == 'completed') {
            $this->task->update(['status' => 'pending_approval']);
            alert()->success('成功', '任務狀態已更新');
            return redirect()->route('task-assign');
        }
    }

    public function render()
    {
        return view('livewire.task-status-change');
    }
}
