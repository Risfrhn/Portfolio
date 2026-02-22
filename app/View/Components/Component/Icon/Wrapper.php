<?php

namespace App\View\Components\Component\Icon;

use Illuminate\View\Component;

class Wrapper extends Component
{
    public $nameTool;

    public function __construct($nameTool = 'Unknown')
    {
        $this->nameTool = $nameTool;
    }

    public function render()
    {
        return view('components.Component.Icon.wrapper');
    }
}
