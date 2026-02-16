<?php

namespace App\Livewire\Page\Admin;
use App\Repository\Landing_Repository;
use App\Service\Project_Service;
use Livewire\Component;
use Livewire\Attributes\On;

class Dashboard extends Component
{
    public ?bool $show = false;
    public ?bool $showModalLogOut = false;
    public ?bool $showPreviewLanding = false;
    public $data;
    public $total_projek;
    public $pengalaman;
    public $total_product;

    public function mount(Landing_Repository $repo, Project_Service $service)
    {
        $this->data = $repo->getDataLanding();

        $this->total_projek = $service->countDataByType('portfolio');
        $this->total_product = $service->countDataByType('product');
    }

    public function openEdit($id){
        $this->show = true;
        $landing = $this->data;
        $skills = $landing->skill_header;
        $decoded = (is_array($skills)) ? $skills : [];
        $this->dispatch('update-landing', 
            [
                'id'=> $id, 
                'header'=> $landing->deskripsi_header,
                'skill'=> $decoded,
                'CV'=> $landing->CV ?? null,
                'tentang'=> $landing->deskripsi_tentang
            ]
        );
    }
    #[On('close-modal-update')]
    public function hideUpdate()
    {
        $this->show = false;
    }

    
    public function openModalLogOut(){
        $this->showModalLogOut = true;
    }
    #[On('close-modal-logout')]
    public function hideLogOut()
    {
        $this->showModalLogOut = false;
    }

    public function openPreviewModalLanding(){
        $this->showPreviewLanding = true;
    }

    #[On('close-modal-preview')]
    public function closePreviewModalLanding(){
        $this->showPreviewLanding = false;
    }

    public function render()
    {
        return view('livewire.page.admin.dashboard',[
            'data' => $this->data,
            'total_projek' => $this->total_projek,
            'pengalaman' => $this->pengalaman,
            'total_product' => $this->total_product,
        ])->layout('layouts.admin');
    }
}
