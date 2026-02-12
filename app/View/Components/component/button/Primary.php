<?php

namespace App\View\Components\Component\Button;

use Illuminate\View\Component;

class Primary extends Component
{
    public $label;
    public $action;
    public $href;
    public $submit;

    public function __construct($label = null, $action = null, $href = null, $submit = null)
    {
        $this->label = $label;
        $this->action = $action;
        $this->href = $href;
        $this->submit = $submit;
    }

    public function render()
    {
        return view('components.component.button.primary');
    }
}
