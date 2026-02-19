<?php

namespace App\Livewire\Page\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Service\Project_Service;

class Project extends Component
{
    use WithPagination;

    private Project_Service $service;

    public $search = '';
    public $filterType = '';
    public $filterCategory = '';
    public $filterPosition = '';

    public $types = [];
    public $categories = [];
    public $positions = [];

    public function boot(Project_Service $service)
    {
        $this->service = $service;
    }

    public function mount()
    {
        // Fetch all data initially to populate filter dropdowns 
        $allData = $this->service->getData(null, null, null, null, false);
        $collection = $allData['status'] ? $allData['data'] : collect([]);
        
        $this->types = $collection->pluck('tipe_projek')->unique()->filter()->values();
        $this->categories = $collection->pluck('kategori')->unique()->filter()->values();
        $this->positions = $collection->pluck('posisi')->unique()->filter()->values();
    }

    public function updated($property)
    {
        // Reset pagination when any filter updates
        $this->resetPage();
    }

    public function render()
    {
        // Map filterType 'semua' to null
        $type = $this->filterType === '' ? null : $this->filterType;
        $category = $this->filterCategory === '' ? null : $this->filterCategory;
        $position = $this->filterPosition === '' ? null : $this->filterPosition;

        $response = $this->service->getData($type, $this->search, $category, $position, true, 9);
        $dataProject = $response['status'] ? $response['data'] : collect([]);

        if($dataProject instanceof \Illuminate\Pagination\LengthAwarePaginator){
             $dataProject->onEachSide(1); // 1 neighbor on each side = 3 items window (prev, current, next)
        }

        return view('livewire.page.user.project', [
            'dataProject' => $dataProject,
            'types' => $this->types,
            'categories' => $this->categories,
            'positions' => $this->positions
        ])->layout('layouts.app');
    }
}
