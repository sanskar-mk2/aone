<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestmonialCard extends Component
{
    public $message;
    public $name;
    public $occupation;
    public $image;
    
    public function __construct($message, $name, $occupation, $image)

    {
        $this->message = $message;
        $this->name = $name;
        $this->occupation = $occupation;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testmonial-card');
    }
}
