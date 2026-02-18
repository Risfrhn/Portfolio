<?php

namespace App\Livewire\Component\Table;

use Livewire\Component;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\On;


class TableExperience extends Component
{
    #[Reactive]
    public $experience;

    public function bukaModalDelete($id = null){
        $this->dispatch('open-modal-delete-experience', $id);
    }

    // Modal Edit
    #[On('open-modal-edit')]
    public function bukaModalEdit($id = null){
        $this->dispatch('open-modal-edit-experience', id: $id);
    }

    #[On('close-modal-edit')]
    public function tutupModalEdit(){
        $this->showModalEdit = false;
    }

    public function render()
    {
        return view('livewire.component.table.table-experience');
    }
}
