<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ClearDefect;

class CleaningSelect extends Component
{
    public $mainItem;
    public $taskHasDefect;
    public $subItem;

    public function mount()
    {
        if ($this->taskHasDefect) {
            $this->mainItem = $this->taskHasDefect->clearDefect->main_item;
            $this->subItem = $this->taskHasDefect->clear_defect_id;
        }
    }

    public function render()
    {
        // 取得所有不重複的主項
        $distinctMainItems = ClearDefect::getDistinctMainItems()->pluck('main_item');

        // 取得該主項底下的子項
        $subItems = ClearDefect::getsubItemsByMainItem($this->mainItem)->pluck('sub_item', 'id');
        return view('livewire.cleaning-select', [
            'distinctMainItems' => $distinctMainItems,
            'subItems' => $subItems,
        ]);
    }
}
