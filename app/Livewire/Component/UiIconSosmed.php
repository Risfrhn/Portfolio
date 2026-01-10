<?php

namespace App\Livewire\Component;

use Livewire\Component;

class UiIconSosmed extends Component
{
    public ?string $link = null;
    public ?string $icon = null; 
    public function render()
    {
        return view('livewire.component.ui-icon-sosmed');
    }
}
