<?php

namespace App\Livewire\Component\Input;

use Livewire\Component;

class Var1 extends Component
{
    public ?string $input;
    public array $tags = [];
    public function mount($tags = [])
    {
        $this->tags = $tags ?? [];
    }

    public function add(){
        if ($this->input === '' || $this->input === ' ') return;
        $this->tags[] = $this->input;
        $this->input = '';
        $this->dispatch('tags-updated', $this->tags);
    }

    public function remove($index){
        unset($this->tags[$index]);
        $this->tags = array_values($this->tags); 
        $this->dispatch('tags-updated', tags: $this->tags);
    }

    public function render()
    {
        return view('livewire.component.input.var1');
    }
}
