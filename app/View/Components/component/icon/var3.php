<?php

namespace App\View\Components\component\icon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var3 extends Component
{
    public ?string $nameTool;
    public function __construct($nameTool)
    {
        $this->nameTool = $nameTool;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.icon.var3');
    }
}
