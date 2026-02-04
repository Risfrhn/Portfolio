<?php

namespace App\Livewire\Component\Table;
use Livewire\Component;

use Livewire\Attributes\Reactive;

class ProjectTable extends Component
{
   
    #[Reactive]
    public $project;

    public function render()
    {
        return view('livewire.component.table.project-table');
    }
}
