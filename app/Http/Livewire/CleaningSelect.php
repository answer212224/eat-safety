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
        // 取得最新生效的清檢缺失日期
        $latestDefect = ClearDefect::whereYear('effective_date', '<=', today())->whereMonth('effective_date', '<=', today())->orderBy('effective_date', 'desc')->first()->effective_date;

        // 轉換成 Carbon 格式
        $latestDefect = Carbon::create($latestDefect);

        // 取得所有不重複的主項
        $distinctMainItems = ClearDefect::getDistinctMainItems($latestDefect)->pluck('main_item');

        // 取得該主項底下的子項
        $subItems = ClearDefect::getsubItemsByMainItem($this->mainItem, $latestDefect)->pluck('sub_item', 'id');
        return view('livewire.cleaning-select', [
            'distinctMainItems' => $distinctMainItems,
            'subItems' => $subItems,
        ]);
    }
}
