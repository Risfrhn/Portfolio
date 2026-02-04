<?php

namespace App\View\Components\component\contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SocialLink extends Component
{
    public $link;
    public $bgColor;
    public $icon;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($link, $bgColor, $icon, $name)
    {
        $this->link = $link;
        $this->bgColor = $bgColor;
        $this->icon = $icon;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.component.contact.social-link');
    }
}
