<?php

namespace App\View\Components\Component\Icon;

use Illuminate\View\Component;

class SimpleButton extends Component
{
    public $link;
    public $icon;

    public function __construct($link = null, $icon = null)
    {
        $this->link = $link;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('components.Component.Icon.simple-button');
    }
}
