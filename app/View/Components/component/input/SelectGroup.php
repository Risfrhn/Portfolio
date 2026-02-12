<?php

namespace App\View\Components\Component\Input;

use Illuminate\View\Component;

class SelectGroup extends Component
{
    public $label;
    public $model;
    public $options;

    public function __construct($label = null, $model = null, $options = [])
    {
        $this->label = $label;
        $this->model = $model;
        $this->options = $options ?? [];
    }

    public function render()
    {
        return view('components.component.input.select-group');
    }
}
