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


        // 取得最新生效的缺陷日期
        $latestDefect = Defect::whereYear('effective_date', '<=', today())->whereMonth('effective_date', '<=', today())->orderBy('effective_date', 'desc')->first()->effective_date;

        // 轉換成 Carbon 格式
        $latestDefect = Carbon::create($latestDefect);

        // 取得所有不重複的群組
        $distinctGroups = Defect::getDistinctGroups($latestDefect)->pluck('group');

        // 取得所有不重複的群組下的標題
        $distinByGroupsTitles = Defect::getDistinctTitlesByGroup($this->group, $latestDefect)->pluck('title');

        // 取得所有不重複的群組下的標題下的描述
        $defects = Defect::getDescriptionWhereByGroupAndTitle($this->group, $this->title, $latestDefect)->pluck('description', 'id');

        return view('livewire.defect-select', compact('distinctGroups', 'distinByGroupsTitles', 'defects'));
    }
}
