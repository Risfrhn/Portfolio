<?php

namespace App\View\Components\component\icon;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var1 extends Component
{
    public ?string $link;
    public ?string $icon;
    public function __construct(?string $link = '#', ?string $icon = null)
    {
        $this->link = $link;
        $this->icon = $icon;
    }

    public function render(): View|Closure|string
    {
        return view('components.component.icon.var1');
    }
}
