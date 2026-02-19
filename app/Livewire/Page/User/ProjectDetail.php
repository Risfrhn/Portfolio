<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use App\Service\Project_Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
class ProjectDetail extends Component
{
    public $project;
    public $id;
    

    public function mount($id, Project_Service $projectService)
    {
        $this->id = $id;
        $this->project = $projectService->find($id);

        if (!$this->project) {
            abort(404);
        }
    }

    #[Title('Project Detail')] 
    public function render()
    {
        return view('livewire.page.user.project-detail');
    }
}
