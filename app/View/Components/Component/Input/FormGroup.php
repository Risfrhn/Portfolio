<?php

namespace App\View\Components\Component\Input;

use Illuminate\View\Component;

class FormGroup extends Component
{
    public $label;
    public $type;
    public $model;
    public $message;
    public $placeholder;
    public $readonly;

    public function __construct($label = null, $type = null, $model = null, $message = null, $placeholder = null, $readonly = null)
    {
        $this->label = $label;
        $this->type = $type;
        $this->model = $model;
        $this->message = $message;
        $this->placeholder = $placeholder;
        $this->readonly = $readonly;
    }

    public function render()
    {
        return view('components.Component.Input.form-group');
    }
}
