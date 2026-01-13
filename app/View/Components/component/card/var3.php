<?php

namespace App\View\Components\component\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var3 extends Component
{
    public ?string $image;
    public ?string $name;
    public ?string $desc;
    public ?string $link;
    public ?string $func;

    public function __construct(?string $image = null, ?string $name = null, ?string $desc = null, ?string $link = null, ?string $func = null)
    {
        $this->image = $image;
        $this->name = $name;
        $this->desc = $desc;
        $this->link = $link;
        $this->func = $func;
    }
    
    public function render(): View|Closure|string
    {
        return view('components.component.card.var3');
    }
}
