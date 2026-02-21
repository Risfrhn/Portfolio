<?php

namespace App\View\Components\Component\Card;

use Illuminate\View\Component;

class HorizontalListItem extends Component
{
    public $link;
    public $func;
    public $image;
    public $name;
    public $type;
    public $desc;

    public function __construct($link = null, $func = null, $image = null, $name = null, $type = null, $desc = null)
    {
        $this->link = $link;
        $this->func = $func;
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->desc = $desc;
    }

    public function render()
    {
        return view('components.Component.Card.horizontal-list-item');
    }
}
