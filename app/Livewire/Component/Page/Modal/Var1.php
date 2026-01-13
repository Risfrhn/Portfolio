<?php

namespace App\Livewire\Component\Page\Modal;

use Livewire\Component;

class Var1 extends Component
{
    public $data;

    public function mount($data){
        $this->data = $data['data'] ?? null;
    }
    
    public function render()
    {
        return view('livewire.component.page.modal.var1');
    }
}
