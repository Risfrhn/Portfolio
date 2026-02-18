<?php

namespace App\Livewire\Page\Admin;

use Livewire\Component;
use App\Repository\Sertifikat_Repository;
use App\Service\Sertifikat_Service;
use Livewire\Attributes\On; 

class Sertifikat extends Component
{

    public $search = '';
    public $sertifikatId = null;
    private Sertifikat_Repository $repo;
    private Sertifikat_Service $service;

    public $showModalTambah = false;
    public $showModalDelete = false;
    public $showModalEdit = false;

    public function boot(Sertifikat_Repository $repo, Sertifikat_Service $service)
    {
        $this->repo = $repo;
        $this->service = $service;
    }

    // modal tambah
    public function bukaModalTambah(){
        $this->showModalTambah = true;
    }

    #[On('close-modal-tambah')]
    public function tutupModalTambah(){
        $this->showModalTambah = false;
    }

    // modal delete
    #[On('buka-alert-delete')]
    public function bukaAlertDelete($id = null){
        $this->sertifikatId = $id;
        $this->showModalDelete = true;
    }

    #[On('delete-sertifikat')]
    public function delete(){
        if ($this->sertifikatId) {
            $this->service->delete($this->sertifikatId);
        }
        $this->showModalDelete = false;
    }

    #[On('close-modal-delete-sertifikat')]
    public function tutupModalDelete(){
        $this->showModalDelete = false;
    }

    // modal edit
    #[On('buka-modal-edit-sertifikat')]
    public function bukaModalEdit($id = null){
        $this->dispatch('load-sertifikat', id: $id);
        $this->showModalEdit = true;
    }

    #[On('close-modal-edit-sertifikat')]
    public function tutupModalEdit(){
        $this->showModalEdit = false;
    }


    public function render()
    {
        $sertifikat = $this->service->getData($this->search)['data'] ?? [];
        return view('livewire.page.admin.sertifikat',[
            'sertifikat' => $sertifikat,
        ])->layout('layouts.admin');
    }
}
