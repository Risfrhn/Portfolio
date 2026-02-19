<?php

namespace App\Livewire\Component;

use Livewire\Component;

class ContactForm extends Component
{
    public $nama = '';
    public $pesan = '';

    protected $rules = [
        'nama' => 'required',
        'pesan' => 'required|min:5',
    ];

    public function kirimEmail()
    {
        $this->validate();
        
        $email = 'rskyfrhn801@gmail.com';
        $subject = rawurlencode('Kontak dari Portofolio - ' . $this->nama);
        $body = rawurlencode("Halo Risky,\n\nSaya " . $this->nama . ",\n\n" . $this->pesan);
        
        $mailto = "mailto:$email?subject=$subject&body=$body";
        
        return session()->flash('success', 'Draft email berhasil dibuat!') && $this->reset() ?: redirect()->to($mailto);
    }

    public function kirimWhatsapp()
    {
        $this->validate();

        $phone = '081345765427';
        // Format number if needed, but the user provided it as is. 
        // Ensuring it starts with 62 or international format is better for WA.
        if (str_starts_with($phone, '0')) {
            $phone = '62' . substr($phone, 1);
        }

        $text = rawurlencode("Halo Risky,\n\nSaya " . $this->nama . ",\n\n" . $this->pesan);
        $waUrl = "https://wa.me/$phone?text=$text";

        return session()->flash('success', 'Dialihkan ke WhatsApp...') && $this->reset() ?: redirect()->to($waUrl);
    }

    public function render()
    {
        return view('livewire.component.contact-form');
    }
}
