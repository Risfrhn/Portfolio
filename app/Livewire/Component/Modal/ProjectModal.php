<?php

namespace App\Livewire\Component\Modal;
use Livewire\Component;
use App\Service\Project_Service;
use App\Repository\Project_Repository;
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
    public $closeEvent = null;

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


    #[On('load-project')] 
    public function update($id){
        $data = app(Project_Repository::class)->find($id);

        if (!$data) return;

        $this->fill([
            'dataId' => $data->id,
            'nama_projek' => $data->nama_projek,
            'perusahaan' => $data->perusahaan,
            'deskripsi_projek' => $data->deskripsi_projek,
            'fitur' => $data->fitur,
            'harga' => $data->harga,
            'tanggal_mulai' => $data->tanggal_mulai,
            'tanggal_akhir' => $data->tanggal_akhir,
            'posisi' => $data->posisi,
            'tipe_projek' => $data->tipe_projek,
            'kategori' => $data->kategori,
            'link_github' => $data->link_github,
            'link_app' => $data->link_app,
            'link_website' => $data->link_website,
            'logo_projek_db' => $data->logo_projek,
            'gambar_flyer_db' => $data->gambar_flyer,
        ]);

        $this->alat = is_array($data->alat)
            ? $data->alat
            : json_decode($data->alat, true) ?? [];

        $this->gambar = is_array($data->gambar)
            ? $data->gambar
            : json_decode($data->gambar, true) ?? [];

        $this->dispatch('refresh-tags', $this->alat);

        $this->showModal = true;
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
