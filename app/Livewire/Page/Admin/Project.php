<?php

namespace App\Livewire\Page\Admin;
use App\Service\Project_Service;
use Livewire\Component;
use Livewire\Attributes\On;

class Project extends Component
{
    public $filter = null;
    public $showModal = false;
    public $showModalEdit = false;
    public $showModalDelete = false;
    public $projectId = null;
    public $project;
    public $search = '';
    
    #[On('refresh-data')]
    public function refreshData()
    {
        // Just by being called, this triggers a re-render which refreshes the data.
    }

    // Modal create
    #[On('open-modal')]
    public function bukaModal($id = null){
        $this->showModal = true;
    }

    #[On('close-modal')]    
    public function tutupModal(){
        $this->showModal = false;
    }

    // Modal edit
    #[On('open-modal-edit')]
    public function bukaModalEdit($id = null){
        $this->showModalEdit = true;
        $this->projectId = $id;
        $data = $this->project->firstWhere('id', $id);
        $alat = $data->alat;
        $decoded = (is_array($alat)) ? $alat : [];
        if (!$data) return; 
        $this->dispatch('update-project', 
            [
                'id'=> $id, 
                'nama_projek'=> $data->nama_projek,
                'perusahaan'=> $data->perusahaan,
                'deskripsi_projek'=> $data->deskripsi_projek,
                'fitur'=> $data->fitur,
                'harga'=> $data->harga,
                'tanggal_mulai'=> $data->tanggal_mulai,
                'tanggal_akhir'=> $data->tanggal_akhir,
                'posisi'=> $data->posisi,
                'tipe_projek'=> $data->tipe_projek,
                'kategori'=> $data->kategori,
                'link_github'=> $data->link_github,
                'link_app'=> $data->link_app,
                'link_website'=> $data->link_website,
                'alat'=> $decoded,
                'logo_projek'=> $data->logo_projek,
                'gambar_flyer'=> $data->gambar_flyer,
                'gambar'=> $data->gambar
            ]
        );
    }

    #[On('close-modal-edit')]
    public function tutupModalEdit(){
        $this->showModalEdit = false;
    }

    // Modal delete
    #[On('open-modal-delete')]
    public function bukaModalDelete($id){
        $this->showModalDelete = true;
        $this->projectId = $id;
    }

    #[On('close-modal-delete')]
    public function tutupModalDelete(){
        $this->showModalDelete = false;
    }

    #[On('delete')]
    public function delete(Project_Service $project)
    {
        $project->delete($this->projectId);
        $this->showModalDelete = false;
    }

    public function render()
    {
        $service = app(Project_Service::class); 
        
        return view('livewire.page.admin.project', [
            'project' => $this->project = $service->getData($this->filter, $this->search)['data'] ?? [],
        ])->layout('layouts.admin');
    }
}
