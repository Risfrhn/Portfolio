<?php

namespace App\View\Components\component\card;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectThumbnail extends Component
{
    public $link;
    public $image;
    public $name;
    public $type;
    public $desc;
    /**
     * Create a new component instance.
     */
    public function __construct( $link, $image, $name, $type, $desc)
    {
        $this->link = $link;
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
        return view('components.component.card.project-thumbnail');
    }
}
