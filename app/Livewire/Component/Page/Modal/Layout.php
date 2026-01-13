<?php

namespace App\Livewire\Component\Page\Modal;

use Livewire\Component;

class Layout extends Component
{
    public ?bool $show = false;
    public ?string $component = null;
    public array $param = [];

    #[On('open-modal')]
    public function show($param){
        $this->show = !$show;
        $this->component = $param['component'] ?? null;
        $this->param = $param ?? []; 
    }

    #[On('close-modal')]
    public function hide(){
        $this->show = false;
        $this->component =  null;
        $this->param = []; 
    }

    public function render()
    {
        return view('livewire.component.page.modal.layout');
    }
}
