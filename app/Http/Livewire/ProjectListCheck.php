<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectListCheck extends Component
{
    public $task;
    public $project;

    public function change(Project $project, $isImpoved)
    {

        $this->task->projects()->updateExistingPivot($project->id, [
            'is_impoved' => !$isImpoved,
        ]);
    }


    public function render()
    {
        return view('livewire.project-list-check', [
            'task' => $this->task,
        ]);
    }
}
