<?php

namespace App\Livewire\Component;

use Livewire\Component;

class UiIconToolsVar1 extends Component
{
    public ?string $image = null;
    public ?string $nameTool = null;
    public ?int $levels = 1;

    public function getLabelLevelProperty() : string
    {
        return match($this->levels){
            1 => 'beginner',
            2 => 'intermediate',
            3 => 'advanced',
            4 => 'expert',
            default => 'unknown'
        };
    }

    public function getLevelProperty() : string
    {
        return "{$this->levels}/4";
    }

    public function getLevelBarProperty() : int
    {
        return (int) (($this->levels/4)*100);
    }


    public function render()
    {
        return view('livewire.component.ui-icon-tools-var1');
    }
}
