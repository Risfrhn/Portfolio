<?php

namespace App\View\Components\Component\Contact;

use Illuminate\View\Component;

class SocialLink extends Component
{
    public $link;
    public $bgColor;
    public $icon;
    public $name;

    public function __construct($name = null, $icon = null, $link = null, $bgColor = null)
    {
        $this->name = $name;
        $this->icon = $icon;
        $this->link = $link;
        $this->bgColor = $bgColor;
    }

    public function render()
    {
        return view('components.component.contact.social-link');
    }
}
