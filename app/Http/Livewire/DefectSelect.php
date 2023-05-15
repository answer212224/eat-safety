<?php

namespace App\Http\Livewire;

use App\Models\Defect;
use Livewire\Component;

class DefectSelect extends Component
{
    public $group = '';
    public $title = '';
    public $description = '';

    public function render()
    {
        $distinctGroups = Defect::getDistinctGroups();
        $distinByGroupsTitles = Defect::getDistinctTitlesByGroup($this->group);
        $defects = Defect::getDescriptionWhereByGroupAndTitle($this->group, $this->title);

        return view('livewire.defect-select', compact('distinctGroups', 'distinByGroupsTitles', 'defects'));
    }
}
