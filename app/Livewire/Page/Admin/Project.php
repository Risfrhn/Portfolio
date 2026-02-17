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
        $this->dispatch('load-project', id: $id);
        $this->showModalEdit = true;
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

        $projects = $service->getData($this->filter, $this->search)['data'] ?? [];

        return view('livewire.page.admin.project', [
            'project' => $projects,
        ])->layout('layouts.admin');
    }

}
