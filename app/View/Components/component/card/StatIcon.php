<?php

namespace App\View\Components\Component\Card;

use Illuminate\View\Component;

class StatIcon extends Component
{
    public $icon;
    public $name;
    public $desc;

    public function __construct($icon = null, $name = null, $desc = null)
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->desc = $desc;
    }

    public function render()
    {
        return view('components.component.card.stat-icon');
    }
}
