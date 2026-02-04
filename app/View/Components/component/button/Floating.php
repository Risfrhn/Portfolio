<?php

namespace App\View\Components\component\button;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Floating extends Component
{
    public $click;
    /**
     * Create a new component instance.
     */
    public function __construct($click = null)
    {
        $this->click = $click;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.button.floating');
    }
}
