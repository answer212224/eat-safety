<?php

namespace App\Http\Livewire;

use App\Models\Defect;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ProjectDefectMonth extends Component
{
    public $month;
    public $project;

    public function mount()
    {
        $this->month = date('Y-m');
    }

    public function render()
    {
        // 取得食安缺失資料庫group是專案查核的資料 title不要重複
        $defects = Defect::where('group', '專案查核')->whereYear('effective_date', date('Y', strtotime($this->month)))->whereMonth('effective_date', date('m', strtotime($this->month)))->get();

        $defectTitles = $defects->pluck('title')->unique()->toArray();

        $defectbackAndfront = [];

        // 每個defectTitle分別加上(內場)和(外場)字串
        foreach ($defectTitles as $key => $defectTitle) {
            $defectbackAndfront[] = '(內場)' . $defectTitle;
        }
        foreach ($defectTitles as $key => $defectTitle) {
            $defectbackAndfront[] = '(外場)' . $defectTitle;
        }

        return view('livewire.project-defect-month', [
            'defectbackAndfront' => $defectbackAndfront,
        ]);
    }
}
