<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Service\Sertifikat_Service;

class Sertifikat extends Component
{
    use WithPagination;

    private Sertifikat_Service $service;

    public $search = '';

    public function boot(Sertifikat_Service $service)
    {
        $this->service = $service;
    }

    public function updated($property)
    {
        // Reset pagination when search updates
        $this->resetPage();
    }

    public function render()
    {
        // getData($keyword, $paginate, $perPage)
        $response = $this->service->getData($this->search, true, 9);
        $dataSertifikat = $response['status'] ? $response['data'] : collect([]);

        if($dataSertifikat instanceof \Illuminate\Pagination\LengthAwarePaginator){
             $dataSertifikat->onEachSide(1); 
        }

        return view('livewire.page.user.sertifikat', [
            'dataSertifikat' => $dataSertifikat
        ])->layout('layouts.app');
    }
}
