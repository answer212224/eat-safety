<?php

namespace App\View\Components\Widgets;

use Illuminate\View\Component;

class _wCardFive extends Component
{
    /**
     * The image.
     *
     * @var string
     */
    public $image;
    
    /**
     * The title.
     *
     * @var string
     */
    public $title;

    /**
     * The balance.
     *
     * @var string
     */
    public $balance;

    /**
     * The percentage.
     *
     * @var string
     */
    public $percentage;

    /**
     * The button.
     *
     * @var string
     */
    public $button;

    /**
     * The link.
     *
     * @var string
     */
    public $link;

   
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($image, $title, $balance, $percentage, $button, $link)
    {
        $this->image = $image;
        $this->title = $title;
        $this->balance = $balance;
        $this->percentage = $percentage;
        $this->button = $button;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rtl.widgets._w-card-five');
    }
}
