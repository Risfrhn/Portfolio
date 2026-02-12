<?php

namespace App\View\Components\component\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class gambarGroup extends Component
{
    public $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.input.gambar-group');
    }
}
