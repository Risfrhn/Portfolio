<?php

namespace App\View\Components\component\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class gambarGroup extends Component
{
    public $model;
    public $label;
    public function __construct($model, $label)
    {
        $this->model = $model;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.input.gambar-group');
    }
}
