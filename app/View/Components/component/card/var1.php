<?php

namespace App\View\Components\component\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var1 extends Component
{
    public ?string $icon;
    public ?string $name;
    public ?string $desc;
    public function __construct(?string $icon = null, ?string $name = null, ?string $desc = null)
    {
        $this->icon = $icon;
        $this->name = $name;
        $this->desc = $desc;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.component.card.var1');
    }
}
