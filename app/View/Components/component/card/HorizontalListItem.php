<?php

namespace App\View\Components\component\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HorizontalListItem extends Component
{
    public $link;
    public $func;
    public $image;
    public $name;
    public $type;
    public $desc;
    /**
     * Create a new component instance.
     */
    public function __construct( $link,$func, $image, $name, $type, $desc)
    {
        $this->link = $link;
        $this->func = $func;
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.card.horizontal-list-item');
    }
}
