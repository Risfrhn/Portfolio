<?php

namespace App\Livewire\Component\Modal;

use App\Service\Landing_Service;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class LandingModal extends Component
{
    use WithFileUploads;
    // Update Landing
    public ?bool $showUpdateLanding = false;
    public $header;
    public $subHeader;
    public $headerBox1;
    public $descSubHeaderBox1;
    public $headerBox2;
    public $descSubHeaderBox2;
    public $tentang;
    public $skill = [];
    public $CV = null;

    protected $rules = [
        'header' => 'nullable|string',
        'subHeader' => 'nullable|string',
        'headerBox1' => 'nullable|string',
        'descSubHeaderBox1' => 'nullable|string',
        'headerBox2' => 'nullable|string',
        'descSubHeaderBox2' => 'nullable|string',
        'skill' => 'nullable|array',
        'CV' => 'nullable|file|mimes:pdf|max:2048',
        'tentang' => 'nullable|string'
    ];

    #[On('update-landing')] 
    public function update($data){
        $this->skill = $data['skill'];
        $this->dispatch('refresh-tags', $this->skill);
        $this->showUpdateLanding = true;
        
        $this->header = $data['header'] ?? null;
        $this->subHeader = $data['sub_header'] ?? null; // Assuming snake_case in DB
        $this->headerBox1 = $data['header_box_1'] ?? null;
        $this->descSubHeaderBox1 = $data['desc_box_1'] ?? null;
        $this->headerBox2 = $data['header_box_2'] ?? null;
        $this->descSubHeaderBox2 = $data['desc_box_2'] ?? null;
        
        $this->tentang = $data['tentang'] ?? null;
        $this->CV = $data['CV'] ?? null;
    }

    
    public function close()
    {
        $this->dispatch('close-modal-update');
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
    }

    public function render()
    {
        return view('livewire.component.modal.landing-modal');
    }
}
