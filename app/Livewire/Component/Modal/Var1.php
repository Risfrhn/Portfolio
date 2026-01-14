<?php

namespace App\Livewire\Component\Modal;

use App\Service\Landing_Service;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class Var1 extends Component
{
    use WithFileUploads;
    // Update Landing
    public ?bool $show = false;
    public $header;
    public $tentang;
    public $skill = [];
    public $CV = null;

    protected $repo;

    protected $rules = [
        'header' => 'nullable|string',
        'skill' => 'nullable|array',
        'CV' => 'nullable|file|mimes:pdf|max:2048',
        'tentang' => 'nullable|string'
    ];

    #[On('update-landing')] 
    public function update($data){
        $this->show = true;
        
        $this->header = $data['header'];
        $this->skill = $data['skill'];
        $this->tentang = $data['tentang'];
        $this->CV = $data['CV'] ?? null;
    }

    
    public function hide(){
        $this->show = false;
    }

    #[On('tags-updated')]
    public function updateTags($tags)
    {
        $this->skill = $tags;
    }

    public function save(Landing_Service $service){
        $validate = $this->validate();
        $result = $service->updateLanding($validate);

        if($result['status'] == false){
            $this->addError('general', $result['message']);
            return;
        }else{
            return redirect()->route('dashboard-admin')->with([
                'message' => $result['message']
            ]);
        }
        $this->dispatch('hide-modal');
    }

    public function render()
    {
        return view('livewire.component.modal.var1');
    }
}
