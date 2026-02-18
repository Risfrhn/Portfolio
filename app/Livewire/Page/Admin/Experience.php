<?php

namespace App\Livewire\Page\Admin;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Service\Experience_Service;
use App\Repository\Experience_Repository;

class Experience extends Component
{
    use WithPagination;
    public $showModalTambah = false;
    public $showModalDelete = false;
    public $showModalEdit = false;
    public $experienceId = null;

    // filter
    public $filter = '';
    public $filterPosisi = '';
    public $search = '';

    // service & repo
    private Experience_Service $service;
    private Experience_Repository $repo;
    public function boot(Experience_Service $service, Experience_Repository $repo)
    {
        $this->service = $service;
        $this->repo = $repo;
    }

    // modal create
    public function bukaModalTambah(){
        $this->showModalTambah = true;
    }
    #[On('close-modal-tambah-experience')]
    public function closeModalTambah(){
        $this->showModalTambah = false;
    }

    // modal delete
    #[On('open-modal-delete-experience')]
    public function bukaModalDelete($id){
        $this->experienceId = $id;
        $this->showModalDelete = true;
    }
    #[On('close-modal-delete-experience')]
    public function tutupModalDelete(){
        $this->showModalDelete = false;
    }
    #[On('delete-experience')]
    public function delete(){
        if ($this->experienceId) {
            $this->service->delete($this->experienceId);
        }
        $this->showModalDelete = false;
    }

    // Modal Edit
    #[On('open-modal-edit-experience')]
    public function bukaModalEdit($id = null){
        $this->dispatch('load-experience', id: $id);
        $this->showModalEdit = true;
    }

    #[On('close-modal-edit-experience')]
    public function tutupModalEdit(){
        $this->showModalEdit = false;
    }

    public function render()
    {
        $experience = $this->service->getData($this->filter, $this->search, $this->filterPosisi, paginate: true, perPage: 5)['data'] ?? [];
        return view('livewire.page.admin.experience', [
            'experience' => $experience,
        ])->layout('layouts.admin');
    }
}
