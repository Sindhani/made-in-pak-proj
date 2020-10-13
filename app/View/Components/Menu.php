<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Menu extends Component
{
    public $title;
    public $url;
    public $active;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $url, $active)
    {
        $this->title = $title;
        $this->url = $url;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
