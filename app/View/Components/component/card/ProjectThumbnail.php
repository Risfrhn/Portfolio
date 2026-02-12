<?php

namespace App\View\Components\Component\Card;

use Illuminate\View\Component;

class ProjectThumbnail extends Component
{
    public $link;
    public $image;
    public $name;
    public $type;
    public $desc;

    public function __construct($link = null, $image = null, $name = null, $type = null, $desc = null)
    {
        $this->link = $link;
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->desc = $desc;
    }

    public function render()
    {
        return view('components.component.card.project-thumbnail');
    }
}
