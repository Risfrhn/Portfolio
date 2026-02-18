<?php

namespace App\Livewire\Component\Table;

use Livewire\Component;
use Livewire\Attributes\Reactive;

class SertifikatTable extends Component
{
    #[Reactive]
    public $sertifikat;

    public function bukaAlertDelete($id = null){
        $this->dispatch('buka-alert-delete', $id);
    }

    public function render()
    {
        return view('livewire.component.table.sertifikat-table');
    }
}
