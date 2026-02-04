<?php

namespace App\View\Components\component\input;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormGroup extends Component
{
    public $label;
    public $type;
    public $model;
    public $message;
    public $placeholder;
    public $readonly;
    /**
     * Create a new component instance.
     */
    public function __construct($label, $type, $model = null, $modelValue = null, $message = null, $placeholder = null, $readonly = null)
    {
        $this->label = $label;
        $this->type = $type;
        $this->model = $model ?? $modelValue;
        $this->message = $message;
        $this->placeholder = $placeholder;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.input.form-group');
    }
}
