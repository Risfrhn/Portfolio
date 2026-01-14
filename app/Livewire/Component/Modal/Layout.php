<?php

namespace App\Livewire\Component\Modal;

use Livewire\Component;

class Layout extends Component
{
    public ?bool $show = false;
    public ?string $component = null;
    public array $param = [];

    protected $listeners = [
        'open-modal' => 'open',
        'close-modal' => 'hide'
    ];
    
    public function open($param = null){
        $this->show = true;
        $this->component = $param['component'] ?? null;
        $this->param = $param ?? []; 
    }

    public function hide(){
        $this->show = false;
        $this->component =  null;
        $this->param = []; 
    }
    public function render()
    {
        return view('livewire.component.modal.layout');
    }
}
