<?php

namespace App\View\Components\component\tab;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class var1 extends Component
{
    public ?string $id;
    public ?string $icon;
    public ?string $title;
    public ?string $desc;
    public array $children;

    public function __construct(?string $id = null, ?string $icon = null, ?string $title = null, ?string $desc = null, array $children = [])
    {
        $this->id = $id;
        $this->icon = $icon;
        $this->title = $title;
        $this->desc = $desc;
        $this->children = $children;
    }

    public function render(): View|Closure|string
    {
        return view('components.component.tab.var1');
    }
}
