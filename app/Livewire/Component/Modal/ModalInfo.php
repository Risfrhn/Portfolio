<?php

namespace App\Livewire\Component\Modal;

use Livewire\Component;

class ModalInfo extends Component
{
    public function closeLandingPreview(){
        $this->dispatch('close-modal-preview');
    }
    public function render()
    {
        return view('livewire.component.modal.modal-info');
    }
}
