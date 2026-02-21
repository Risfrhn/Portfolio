<?php

namespace App\View\Components\Component\Card;

use Illuminate\View\Component;

class StatCard extends Component
{
    public $count;
    public $text;
    public $icon;

    public function __construct($count = null, $text = null, $icon = null)
    {
        $this->count = $count;
        $this->text = $text;
        $this->icon = $icon;
    }

    public function render()
    {
        return view('components.Component.Card.stat-card');
    }
}
