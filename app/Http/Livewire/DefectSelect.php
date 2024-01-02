<?php

namespace App\Http\Livewire;

use App\Models\Defect;
use Carbon\Carbon;
use Livewire\Component;

class DefectSelect extends Component
{
    public $group;
    public $title;
    public $description;
    public $taskHasDefect;

    public function mount()
    {
        if ($this->taskHasDefect) {
            $this->group = $this->taskHasDefect->defect->group;
            $this->title = $this->taskHasDefect->defect->title;
            $this->description = $this->taskHasDefect->defect->id;
        }
    }

    public function render()
    {

        // 取得所有不重複的群組
        $distinctGroups = Defect::getDistinctGroups()->pluck('group');

        // 取得所有不重複的群組下的標題
        $distinByGroupsTitles = Defect::getDistinctTitlesByGroup($this->group)->pluck('title');

        // 取得所有不重複的群組下的標題下的描述
        $defects = Defect::getDescriptionWhereByGroupAndTitle($this->group, $this->title);

        return view('livewire.defect-select', compact('distinctGroups', 'distinByGroupsTitles', 'defects'));
    }
}
