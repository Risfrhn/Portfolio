<?php

namespace App\Livewire\Page\Admin;

use Livewire\Component;

class Experience extends Component
{
    public $showModalTambah = false;

    public function openModalTambah(){
        $this->showModalTambah = true;
    }

    #[On('close-modal-tambah')]
    public function closeModalTambah(){
        $this->showModalTambah = false;
    }

    public function render()
    {
        return view('livewire.page.admin.experience')->layout('layouts.admin');
    }
}
