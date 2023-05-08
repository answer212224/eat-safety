<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class _wSix extends Component
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
        return view('components.rtl.widgets._w-six');
    }
}
