<?php

namespace App\Livewire\Component\Modal;
use Livewire\Component;
use App\Service\Project_Service;
use Livewire\Attributes\Validate;

class ProjectModal extends Component
{
    public $showTambahModal = false;
    public ?string $head = null;
    public ?string $desk = null;

    // Validasi fields
    #[Validate('nullable|min:3', as: 'nama_projek')]
    public $nama_projek = null;
    
    #[Validate('nullable|min:3', as: 'perusahaan')]
    public $perusahaan = null;
    
    #[Validate('nullable|min:10', as: 'deskripsi_projek')]
    public $deskripsi_projek = null;
    
    #[Validate('nullable|min:10', as: 'fitur')]
    public $fitur = null;
    
    #[Validate('nullable|numeric|min:0', as: 'harga')]
    public $harga = null;
    
    #[Validate('nullable|date', as: 'tanggal_mulai')]
    public $tanggal_mulai = null;
    
    #[Validate('nullable|date|after_or_equal:tanggal_mulai', as: 'tanggal_akhir')]
    public $tanggal_akhir = null;
    
    #[Validate('nullable', as: 'posisi')]
    public $posisi = null;
    
    #[Validate('nullable|in:portfolio,product', as: 'tipe_projek')]
    public $tipe_projek = null;
    
    #[Validate('nullable', as: 'kategori')]
    public $kategori = null;
    
    #[Validate('nullable|url', as: 'link_github')]
    public $link_github = null;
    
    #[Validate('nullable|url', as: 'link_app')]
    public $link_app = null;
    
    #[Validate('nullable|url', as: 'link_webisite')]
    public $link_webisite = null;

    // Fungsi
    public function create(Project_Service $service){
        $validated = $this->validate();
        $result = $service->create($validated);
        $this->dispatch('refresh-data');
        $this->dispatch('close-modal-tambah');
    }



    // Modal
    public function tutupModalTambah(){
        $this->dispatch('close-modal-tambah');
    }

    public function render()
    {
        return view('livewire.component.modal.project-modal');
    }
}
