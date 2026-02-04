<?php

namespace App\Livewire\Component\Input;
use Livewire\Attributes\On;
use Livewire\Component;

class TagInput extends Component
{
    public ?string $input;
    public array $tags = [];

    public function mount($tags = [])
    {
        $this->tags = $tags ?? [];
    }

    #[On('refresh-tags')]
    public function refreshTags($tags)
    {
        $this->tags = $tags;
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
        return view('livewire.component.input.tag-input');
    }
}
