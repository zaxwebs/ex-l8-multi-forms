<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Feedback extends Component
{
    public $type;
    public $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type = 'invalid')
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.feedback');
    }
}
