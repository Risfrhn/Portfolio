<?php

namespace App\View\Components\component\contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var2 extends Component
{
    public ?string $link;
    public ?string $name;
    public ?string $icon;
    public ?string $bgColor;

    public function __construct(?string $link = '#', ?string $name = null, ?string $icon = null, ?string $bgColor = '#a78bfa')
    {
        $this->link = $link;
        $this->name = $name;
        $this->icon = $icon;
        $this->bgColor = $bgColor;
    }    

    public function render(): View|Closure|string
    {
        return view('components.component.contact.var2');
    }
}
