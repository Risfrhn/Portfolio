<?php

namespace App\Livewire\Component;

use Livewire\Component;

class UiCardVar3 extends Component
{
    public ?string $image = null;
    public ?string $name = null;
    public ?string $desc = null;
    public ?string $link = null;
    public ?string $func = null;
    public function render()
    {
        return view('livewire.component.ui-card-var3');
    }
}
