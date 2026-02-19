<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Service\Experience_Service;

class Experience extends Component
{
    use WithPagination;

    private Experience_Service $service;

    public $search = '';
    public $filterType = '';
    public $filterPosition = '';

    public $types = [];
    public $positions = [];

    public function boot(Experience_Service $service)
    {
        $this->service = $service;
    }

    public function mount()
    {
        // Fetch all data initially to populate filter dropdowns 
        $allData = $this->service->getData(null, null, null, false);
        $collection = $allData['status'] ? $allData['data'] : collect([]);
        
        $this->types = $collection->pluck('tipe_pekerjaan')->unique()->filter()->values();
        $this->positions = $collection->pluck('posisi')->unique()->filter()->values();
    }

    public function updated($property)
    {
        // Reset pagination when any filter updates
        $this->resetPage();
    }

    public function render()
    {
        // Map empty strings to null
        $type = $this->filterType === '' ? null : $this->filterType;
        $position = $this->filterPosition === '' ? null : $this->filterPosition;

        // getData($type, $keyword, $posisi, $paginate, $perPage)
        $response = $this->service->getData($type, $this->search, $position, true, 6);
        $dataExperience = $response['status'] ? $response['data'] : collect([]);

        if($dataExperience instanceof \Illuminate\Pagination\LengthAwarePaginator){
             $dataExperience->onEachSide(1); 
        }

        return view('livewire.page.user.experience', [
            'dataExperience' => $dataExperience
        ])->layout('layouts.app');
    }
}
