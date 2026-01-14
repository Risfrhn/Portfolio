<?php

namespace App\Livewire\Component\Modal;

use App\Service\Landing_Service;
use Livewire\Component;

class Var1 extends Component
{

    public $header;
    public $tentang;
    public $skill;
    public $CV;
    protected $rules = [
        'header' => 'nullable|string',
        'skill' => 'nullable|array',
        'CV' => 'nullable|mimes:pdf|max:2048',
        'tentang' => 'nullable|string'
    ];

    public function update(Landing_Service $service){
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
        return view('livewire.component.modal.var1');
    }
}
