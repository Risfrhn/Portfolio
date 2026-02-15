<?php

namespace App\Livewire\Component\Modal;
use Livewire\Component;
use App\Service\Project_Service;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class ProjectModal extends Component
{
    use WithFileUploads;
    
    // Multiple Input Gambar 
    public $tempImages = [];
    public $gambar_flyer_db;
    public $logo_projek_db;

    public $showModal = false;
    public $dataId = null;
    public ?string $head = null;
    public ?string $desk = null;
    public $closeEvent = '';

    // Options for SelectGroup
    public $tipeOptions = [
        'portfolio' => 'Portfolio',
        'product' => 'Product'
    ];
    public $posisiOptions = [
        'Frontend' => 'Frontend Developer',
        'Backend' => 'Backend Developer',
        'Fullstack' => 'Fullstack Developer',
        'UI/UX' => 'UI/UX Designer',
    ];
    public $kategoriOptions = [
        'Website' => 'Website',
        'App mobile' => 'App mobile',
        'UI/UX Design' => 'UI/UX Design',
        'App desktop' => 'App desktop',
        'Documentation' => 'Documentation'
    ];

    #[Validate('nullable|string|max:255', as: 'nama project')]
    public $nama_projek;

    #[Validate('nullable|string|max:255', as: 'nama perusahaan')]
    public $perusahaan;

    #[Validate('nullable|string', as: 'deskripsi')]
    public $deskripsi_projek;

    #[Validate('nullable|string', as: 'fitur')]
    public $fitur;

    #[Validate('nullable|string', as: 'harga')]
    public $harga;

    #[Validate('nullable|date', as: 'tanggal mulai')]
    public $tanggal_mulai;

    #[Validate('nullable|date|after_or_equal:tanggal_mulai', as: 'tanggal akhir')]
    public $tanggal_akhir;

    #[Validate('nullable|string', as: 'posisi')]
    public $posisi;

    #[Validate('nullable|string', as: 'tipe')]
    public $tipe_projek;

    #[Validate('nullable|string', as: 'kategori')]
    public $kategori;

    #[Validate('nullable|url', as: 'link github')]
    public $link_github;

    #[Validate('nullable|url', as: 'link app')]
    public $link_app;

    #[Validate('nullable|url', as: 'link website')]
    public $link_website;

    #[Validate('nullable|array', as: 'alat')]
    public $alat = [];

    #[Validate('nullable|image|max:10240', as: 'logo projek')]
    public $logo_projek;

    #[Validate('nullable|image|max:10240', as: 'gambar flyer')]
    public $gambar_flyer;

    #[Validate([
        'gambar' => 'nullable|array',
        'gambar.*' => 'nullable'
    ])]
    public $gambar = [];


    #[On('update-project')] 
    public function update($data){
        $this->dataId = $data['id'] ?? null;
        $this->alat = $data['alat'] ?? [];
        $this->dispatch('refresh-tags', $this->alat);
        $this->showModal = true;
        $this->nama_projek = $data['nama_projek'];
        $this->perusahaan = $data['perusahaan'];
        $this->deskripsi_projek = $data['deskripsi_projek'];
        $this->fitur = $data['fitur'];
        $this->harga = $data['harga'];
        $this->tanggal_mulai = $data['tanggal_mulai'];
        $this->tanggal_akhir = $data['tanggal_akhir'];
        $this->posisi = $data['posisi'];
        $this->tipe_projek = $data['tipe_projek'];
        $this->kategori = $data['kategori'];
        $this->link_github = $data['link_github'];
        $this->link_app = $data['link_app'];
        $this->link_website = $data['link_website'];
        $this->logo_projek_db = $data['logo_projek'];
        $this->gambar_flyer_db = $data['gambar_flyer'];
        $this->gambar = is_array($data['gambar']) ? $data['gambar'] : json_decode($data['gambar'], true) ?? [];
    }

    #[On('tags-updated')]
    public function updateTags($tags)
    {
        $this->alat = $tags;
    }

    // Fungsi
    public function save(Project_Service $service){
        $validated = $this->validate();
      
        if ($this->dataId) {
            $service->edit($validated, $this->dataId);
            $this->dispatch('refresh-data');
            $this->dispatch('close-modal-edit');
        } else {
            $service->create($validated);
            $this->dispatch('refresh-data');
            $this->dispatch('close-modal');
        }
    }

    // Multiple input gambar
    public function add()
    {
        $this->validate([
            'tempImages.*' => 'image|max:10240',
        ]);

        foreach ($this->tempImages as $img) {
            $this->gambar[] = $img;
        }
        $this->reset('tempImages');
    }


    public function remove($index){
        unset($this->gambar[$index]);
        $this->gambar = array_values($this->gambar); 
    }


    // Modal close
    public function tutupModal(){
        $this->dispatch('close-modal');
    }

    public function tutupModalEdit(){
        $this->dispatch('close-modal-edit');
    }

    public function render()
    {
        return view('livewire.component.modal.project-modal');
    }
}
