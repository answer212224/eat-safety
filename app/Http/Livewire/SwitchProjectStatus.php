<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SwitchProjectStatus extends Component
{
    public $status;
    public $project;

    public function mount()
    {
        $this->status = $this->project->status;
    }

    public function toggleStatus()
    {
        $this->project->update(['status' => $this->status]);
    }

    public function render()
    {
        return view('livewire.switch-project-status');
    }
}
