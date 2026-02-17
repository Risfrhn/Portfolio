<?php

namespace App\Livewire\Component\Modal;

use Livewire\Component;

class ExperienceModal extends Component
{
    public $closeEvent = '';
    public function closeModalTambah(){
        $this->dispatch('close-modal-tambah');
    }
    public function render()
    {
        return view('livewire.component.modal.experience-modal');
    }
}
