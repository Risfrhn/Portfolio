<?php

namespace App\View\Components\Component\Contact;

use Illuminate\View\Component;

class Quote extends Component
{
    public function __construct($name = null, $job = null, $quote = null, $image = null)
    {
        $this->name = $name;
        $this->job = $job;
        $this->quote = $quote;
        $this->image = $image;
    }

    public function render()
    {
        return view('components.Component.Contact.quote');
    }
}
