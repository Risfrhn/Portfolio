<?php

namespace App\Livewire\Component\Modal;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use App\Service\Experience_Service;
use App\Repository\Experience_Repository;

class ExperienceModal extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $dataId = null;
    public ?string $head = null;
    public ?string $desk = null;
    public $closeEvent = '';

    // Options
    public $posisiOptions = [
        'Backend Developer' => 'Backend Developer',
        'Frontend Developer' => 'Frontend Developer',
        'Fullstack Developer' => 'Fullstack Developer',
        'Mobile Developer' => 'Mobile Developer',
        'UI/UX Designer' => 'UI/UX Designer',
        'System Analyst' => 'System Analyst',
        'DevOps Engineer' => 'DevOps Engineer',
        'Project Manager' => 'Project Manager',
        'Other' => 'Other',
    ];

    public $tipePekerjaanOptions = [
        'Full-time' => 'Full-time',
        'Part-time' => 'Part-time',
        'Freelance' => 'Freelance',
        'Contract' => 'Contract', 
        'Internship' => 'Internship',
    ];

    // Form Properties
    #[Validate('required|string|in:Backend Developer,Frontend Developer,Fullstack Developer,Mobile Developer,UI/UX Designer,System Analyst,DevOps Engineer,Project Manager,Other', as: 'posisi')]
    public $posisi;

    #[Validate('required|string|in:Full-time,Part-time,Freelance,Contract,Internship', as: 'tipe pekerjaan')]
    public $tipe_pekerjaan;

    #[Validate('required|string|max:255', as: 'perusahaan / project')]
    public $perusahaan;

    #[Validate('required|date', as: 'tanggal mulai')]
    public $tanggal_mulai;

    #[Validate('nullable|date|after_or_equal:tanggal_mulai', as: 'tanggal akhir')]
    public $tanggal_akhir;

    public $masih_bekerja = false;

    #[Validate('required|string', as: 'deskripsi')]
    public $deskripsi;

    #[Validate('nullable|string', as: 'achievement / impact')]
    public $pencapaian;

    #[Validate('nullable|array', as: 'tools / tech stack')]
    public $teknologi = [];

    // Images
    #[Validate('nullable|image|max:10240', as: 'logo company')]
    public $logo;
    public $logo_db;

    #[Validate('nullable|image|max:10240', as: 'flyer')]
    public $flyer;
    public $flyer_db;

    // Multi Image Gallery
    #[Validate([
        'gambar' => 'nullable|array',
        'gambar.*' => 'nullable'
    ])]
    public $gambar = [];
    public $tempImages = [];

    protected $rules = [
        'tempImages.*' => 'image|max:10240',
    ];

    public function updatedMasihBekerja($value)
    {
        if ($value) {
            $this->tanggal_akhir = null;
        }
    }

    #[On('tags-updated')]
    public function updateTags($tags)
    {
        $this->teknologi = $tags;
    }

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
    #[On('load-experience')] 
    public function update($id){
        $data = app(Experience_Repository::class)->find($id);

        if (!$data) return;

        $this->fill([
            'dataId' => $data->id,
            'perusahaan' => $data->perusahaan,
            'posisi' => $data->posisi,
            'deskripsi' => $data->deskripsi,
            'pencapaian' => $data->pencapaian,
            'tanggal_mulai' => $data->tanggal_mulai,
            'tanggal_akhir' => $data->tanggal_akhir,
            'tipe_pekerjaan' => $data->tipe_pekerjaan,
            'logo_db' => $data->logo,
            'flyer_db' => $data->flyer,
        ]);

        $this->teknologi = is_array($data->teknologi)
            ? $data->teknologi
            : json_decode($data->teknologi, true) ?? [];

        $this->gambar = is_array($data->gambar)
            ? $data->gambar
            : json_decode($data->gambar, true) ?? [];

        $this->dispatch('refresh-tags', $this->teknologi);

        $this->showModal = true;
    }

    public function save(Experience_Service $service){
        $validated = $this->validate();
        if($this->dataId){
            $service->edit($validated, $this->dataId);
            $this->dispatch('close-modal-edit-experience');
        }else{
            $service->create($validated);
            $this->dispatch('close-modal-tambah-experience');
        }
    }

    public function closeModalTambah(){
        $this->dispatch('close-modal-tambah-experience');
    }

    public function closeModalEdit(){
        $this->dispatch('close-modal-edit-experience');
    }

    public function render()
    {
        return view('livewire.component.modal.experience-modal');
    }
}
