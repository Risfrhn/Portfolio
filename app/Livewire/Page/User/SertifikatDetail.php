<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use App\Service\Sertifikat_Service;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('layouts.app')]
class SertifikatDetail extends Component
{
    public $sertifikat;
    public $id;

    public function mount($id, Sertifikat_Service $sertifikatService)
    {
        $this->id = $id;
        $this->sertifikat = $sertifikatService->find($id);

        if (!$this->sertifikat) {
            abort(404);
        }
    }

    #[Title('Sertifikat Detail')] 
    public function render()
    {
        return view('livewire.page.user.sertifikat-detail');
    }
}
