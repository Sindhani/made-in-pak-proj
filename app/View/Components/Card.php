<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $customers = 50;
    public $buyers = 100;
    public $type;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card');
    }
}
