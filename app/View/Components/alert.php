<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $type;
    public $message;
    public $text;
    /**
     * Create a new component instance.
     * @param $type = string
     * @param $message = string
     * @return void
     */
    public function __construct($text= null,$type=null,$message=null)
    {
        $this->message = $message;
        $this->type = $type;
        $this->text  = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
