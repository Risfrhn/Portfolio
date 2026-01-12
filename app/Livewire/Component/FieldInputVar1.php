<?php

namespace App\Livewire\Component;

use Livewire\Component;

class FieldInputVar1 extends Component
{
    public ?string $label;
    public ?bool $readonly;
    public ?string $type;
    public ?string $placeholder;
    public ?bool $show = false;

    public function showPassword(){
        $this->show = !$this->show;
    }
    public function render()
    {
        return view('livewire.component.field-input-var1');
    }
}
