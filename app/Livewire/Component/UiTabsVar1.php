<?php

namespace App\Livewire\Component;

use Livewire\Component;

class UiTabsVar1 extends Component
{
    public ?string $id = null;
    public ?string $icon = null;
    public ?string $title = null;
    public ?string $desc = null;
    public bool $isOpen = false;
    public $children = [];

    public function toggle(){
        $this->isOpen = !$this->isOpen;
    }

    public function render()
    {
        return view('livewire.component.ui-tabs-var1');
    }
}
