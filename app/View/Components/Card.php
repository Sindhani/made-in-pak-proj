<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $type;
    public $title;
    public $xyz;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $title, $data)
    {
        $this->type = $type;
        $this->title = $title;
        $this->xyz = $data;
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
