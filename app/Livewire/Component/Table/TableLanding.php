<?php

namespace App\Livewire\Component\Table;

use Livewire\Component;

class TableLanding extends Component
{
    #[Reactive]
    public $data;
    public function render()
    {
        return view('livewire.component.table.table-landing');
    }
}
