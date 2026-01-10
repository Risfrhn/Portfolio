<?php

namespace App\Livewire\Component;

use Livewire\Component;

class UiButtonVar1 extends Component
{
    public ?string $label = null;
    public ?string $action = null;
    public ?string $href = null;
    public ?string $submit = null;
    public function render()
    {
        return view('livewire.component.ui-button-var1');
    }
}
