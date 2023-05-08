<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class _wHybridOne extends Component
{
    /**
     * The title.
     *
     * @var string
     */
    public $title;

    /**
     * The chart ID.
     *
     * @var string
     */
    public $chartId;
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($chartId)
    {
        $this->chartId = $chartId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rtl.widgets._w-hybrid-one');
    }
}
