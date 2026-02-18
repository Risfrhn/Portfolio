<?php

namespace App\Livewire\Component\Table;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;

class ProjectTable extends Component
{
   
    #[Reactive]
    public $project;
    public $showModalEdit = false;
    public $showModalDelete = false;

    // modal edit
    public function bukaModalEdit($id = null){
        $this->dispatch('open-modal-edit', $id);
    }

    #[On('close-modal-edit')]
    public function tutupModalEdit(){
        $this->showModalEdit = false;
    }

    // modal delete
    public function bukaModalDelete($id = null){
        $this->dispatch('open-modal-delete', $id);
    }

    #[On('close-modal-delete')]
    public function tutupModalDelete(){
        $this->showModalDelete = false;
    }

    public function render()
    {
        return view('livewire.component.table.project-table');
    }
}
