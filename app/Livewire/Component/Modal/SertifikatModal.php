<?php

namespace App\Livewire\Component\Modal;
use Livewire\Component;
use App\Service\Sertifikat_Service;
use App\Repository\Sertifikat_Repository;
use Livewire\Attributes\Validate;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class SertifikatModal extends Component
{
    use WithFileUploads;
    public $dataId;
    public $closeEvent;

    #[Validate('nullable|string|max:50', as: 'nomor sertifikat')]
    public $nomor_sertifikat;

    #[Validate('nullable|string|max:150', as: 'bama sertifikat')]
    public $judul;

    #[Validate('nullable|string|max:100', as: 'nama institusi')]
    public $nama_institusi;

    #[Validate('nullable|date', as: 'tanggal terbit')]
    public $tanggal_terbit;

    #[Validate('nullable|date|after_or_equal:tanggal_terbit', as: 'tanggal berlaku')]
    public $tanggal_berlaku;

    #[Validate('nullable|image|max:10240', as: 'gambar sertifikat')]
    public $gambar_sertifikat;
    public $gambar_sertifikat_db;

    #[Validate('nullable|file|mimes:pdf|max:10240', as: 'file sertifikat')]
    public $file_sertifikat;
    public $file_sertifikat_db;

    #[On('load-sertifikat')] 
    public function update($id){
        $data = app(Sertifikat_Repository::class)->find($id);

        if (!$data) return;

        $this->fill([
            'dataId' => $data->id,
            'nomor_sertifikat' => $data->nomor_sertifikat,
            'judul' => $data->judul,
            'nama_institusi' => $data->nama_institusi,
            'tanggal_terbit' => $data->tanggal_terbit ? \Carbon\Carbon::parse($data->tanggal_terbit)->format('Y-m-d') : null,
            'tanggal_berlaku' => $data->tanggal_berlaku ? \Carbon\Carbon::parse($data->tanggal_berlaku)->format('Y-m-d') : null,
            'gambar_sertifikat_db' => $data->gambar_sertifikat,
            'file_sertifikat_db' => $data->file_sertifikat,
        ]);

        $this->showModal = true;
    }

    public function save(Sertifikat_Service $service){
        $validated = $this->validate();
      
        if ($this->dataId) {
            $service->edit($validated, $this->dataId);
            $this->dispatch('close-modal-edit-sertifikat');
        } else {
            $service->create($validated);
            $this->dispatch('close-modal-tambah');
        }
    }

    public function tutupModalTambah(){
        $this->dispatch('close-modal-tambah');
        $this->reset();
    }

    public function tutupModalEdit(){
        $this->dispatch('close-modal-edit-sertifikat');
    }

    public function render()
    {
        return view('livewire.component.modal.sertifikat-modal');
    }
}
