<?php

namespace App\Livewire\Page\Admin;
use App\Service\Project_Service;
use App\Repository\Project_Repository;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class Project extends Component
{
    use WithPagination;
    public $filter = null;
    public $showModal = false;
    public $showModalEdit = false;
    public $showModalDelete = false;
    public $projectId = null;
    public $search = '';
    
    private Project_Service $service;
    private Project_Repository $repo;

    public function boot(Project_Service $service, Project_Repository $repo)
    {
        $this->service = $service;
        $this->repo = $repo;
    }

    // Modal create
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

    #[On('delete-project')]
    public function delete(Project_Service $project)
    {
        $project->delete($this->projectId);
        $this->showModalDelete = false;
    }

    public function render()
    {
        $projects = $this->service->getData($this->filter, $this->search, paginate: true, perPage: 5)['data'] ?? [];

        return view('livewire.page.admin.project', [
            'project' => $projects,
        ])->layout('layouts.admin');
    }

}
