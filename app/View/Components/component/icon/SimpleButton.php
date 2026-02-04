<?php

namespace App\View\Components\component\icon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleButton extends Component
{
    public $link;
    public $icon;
    /**
     * Create a new component instance.
     */
    public function __construct($link, $icon)
    {
        $this->link = $link;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.icon.simple-button');
    }
}
