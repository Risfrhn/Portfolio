<?php

namespace App\Livewire\Component;

use Livewire\Component;

class UiCardVar1 extends Component
{
    public ?string $icon;
    public ?string $name;
    public ?string $desc;
    public function render()
    {
        return view('livewire.component.ui-card-var1');
    }
}
