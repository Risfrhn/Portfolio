<?php

namespace App\Livewire\Page\Admin;
use App\Service\Project_Service;
use Livewire\Component;
use Livewire\Attributes\On;

class Project extends Component
{

    // public $project;
    public $filter = null;
    public $showTambahModal = false;
    
    #[On('refresh-data')]
    public function refreshData()
    {
        // Method ini dipanggil untuk men-trigger re-render
    }

    // Modal
    public function bukaModalTambah(){
        $this->showTambahModal = true;
    }

    #[On('close-modal-tambah')]
    public function tutupModalTambah(){
        $this->showTambahModal = false;
    }


    public function render()
    {
        // Fetch di sini
        $service = app(Project_Service::class);
        $result = $service->getDataByType($this->filter);
        $project = $result['status'] ? $result['data'] : [];
        
        return view('livewire.page.admin.project', [
            'project' => $project  // Kirim ke view
        ])->layout('layouts.admin');
    }
}
