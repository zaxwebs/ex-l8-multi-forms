<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $name;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method = 'post', $name = null)
    {
        //
        $this->method= $method;
        $this->name= $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
