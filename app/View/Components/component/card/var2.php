<?php

namespace App\View\Components\component\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var2 extends Component
{
    public ?string $link;
    public ?string $image;
    public ?string $name;
    public ?string $type;
    public ?string $desc;

    public function __construct(?string $link = null, ?string $image = null, ?string $name = null, ?string $type = null, ?string $desc = null)
    {
        $this->link = $link;
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->desc = $desc;
    }
    public function render(): View|Closure|string
    {
        return view('components.component.card.var2');
    }
}
