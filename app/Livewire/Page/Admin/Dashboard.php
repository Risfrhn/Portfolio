<?php

namespace App\Livewire\Page\Admin;
use App\Repository\Landing_Repository;
use Livewire\Component;

class Dashboard extends Component
{
    public ?bool $show = false;
    public $data;

    public function mount(Landing_Repository $repo)
    {
        $this->data = $repo->getDataLanding();
    }

    public function open($id){
        $this->show = true;
        $landing = $this->data;
        $skills = $landing->skill_header;
        
        if (is_string($skills)) {
            $decoded = json_decode($skills, true);
            $skills = ($decoded && json_last_error() === JSON_ERROR_NONE) 
                ? $decoded 
                : array_map('trim', explode(',', $skills));
        }
        
        $skills = is_array($skills) ? $skills : [];
        $this->dispatch('update-landing', 
            [
                'id'=> $id, 
                'header'=> $landing->deskripsi_header,
                'skill'=> $skills,
                'CV'=> $landing->CV ?? null,
                'tentang'=> $landing->deskripsi_tentang
            ]
        );
    }

    

    public function render()
    {
        return view('livewire.page.admin.dashboard')->layout('layouts.admin');
    }
}
