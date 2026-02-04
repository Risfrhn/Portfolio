<?php

namespace App\View\Components\component\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectGroup extends Component
{
    public $label;
    public $modelValue;
    /**
     * Create a new component instance.
     */
    public function __construct($label, $modelValue = null)
    {
        $this->label = $label;
        $this->modelValue = $modelValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.input.select-group');
    }
}
