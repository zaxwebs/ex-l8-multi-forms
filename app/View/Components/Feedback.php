<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Feedback extends Component
{
    public $type;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message, $type = 'invalid')
    {
        $this->message = $message;
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
