<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use App\Service\Experience_Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
class ExperienceDetail extends Component
{
    public $experience;
    public $id;

    public function mount($id, Experience_Service $experienceService)
    {
        $this->id = $id;
        $this->experience = $experienceService->find($id);

        if (!$this->experience) {
            abort(404);
        }
    }

    #[Title('Experience Detail')] 
    public function render()
    {
        return view('livewire.page.user.experience-detail');
    }
}
