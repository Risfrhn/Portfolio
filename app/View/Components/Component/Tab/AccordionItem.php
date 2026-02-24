<?php

namespace App\View\Components\Component\Tab;

use Illuminate\View\Component;

class AccordionItem extends Component
{
    public $id;
    public $icon;
    public $title;
    public $desc;
    public $children;

    public function __construct($id = null, $icon = null, $title = null, $desc = null, $children = [])
    {
        $this->id = $id;
        $this->icon = $icon;
        $this->title = $title;
        $this->desc = $desc;
        $this->children = $children;
    }

    public function render()
    {
        return view('components.Component.Tab.accordion-item');
    }
}
