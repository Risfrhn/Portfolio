<?php

namespace App\Livewire\Component\Modal;

use Livewire\Component;

class Var1 extends Component
{
    public ?bool $showModal = false;

    public function isOpen(){
        $this->showModal = !$this->showModal;
    }
    public function render()
    {
        return view('livewire.component.modal.var1');
    }
}
