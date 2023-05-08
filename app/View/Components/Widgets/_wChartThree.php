<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class _wChartThree extends Component
{
    /**
     * The title.
     *
     * @var string
     */
    public $title;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.widgets._w-chart-three');
    }
}
