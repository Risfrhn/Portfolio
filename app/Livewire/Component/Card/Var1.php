<?php

namespace App\Livewire\Component\Card;

use Livewire\Component;

class Var1 extends Component
{
    public ?string $text;
    public ?string $icon;
    public ?int $count;
    public function render()
    {
        return view('livewire.component.card.var1');
    }
}
