<?php

namespace App\Livewire\Page\Admin;
use App\Repository\Landing_Repository;
use Livewire\Component;

class Dashboard extends Component
{
    public Landing_Repository $landing;

    public function render()
    {
        return view('livewire.page.admin.dashboard')->layout('layouts.admin');
    }
}
