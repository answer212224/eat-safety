<?php

namespace App\View\Components\rtl\Navbar;

use Illuminate\View\Component;

class styleHorizontalMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rtl.navbar.style-horizontal-menu');
    }
}
