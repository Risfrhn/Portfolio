<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">
                        {{ $dataId ? 'Edit Sertifikat' : 'Tambah Sertifikat' }}
                    </p>
                    <p class="text-xs w-[300px] text-gray-500">
                        {{ $dataId ? 'Perbarui data sertifikat' : 'Tambahkan sertifikat baru ke portofolio' }}
                    </p>
                </div>

                <div class="col-span-12 space-y-4">
                    <x-component.input.form-group label="Nomor Sertifikat" type="text" model="nomor_sertifikat" placeholder="Masukkan Nomor Sertifikat"/>
                    
                    <x-component.input.form-group label="Judul Sertifikat" type="text" model="judul" placeholder="Masukkan Judul Sertifikat"/>
                    
                    <x-component.input.form-group label="Nama Institusi" type="text" model="nama_institusi" placeholder="Masukkan Nama Institusi"/>

                    <div class="grid grid-cols-2 gap-5">
                        <x-component.input.form-group label="Tanggal Terbit" type="date" model="tanggal_terbit" placeholder="Tanggal Terbit"/>
                        <x-component.input.form-group label="Tanggal Berlaku" type="date" model="tanggal_berlaku" placeholder="Tanggal Berlaku"/>
                    </div>

                    <x-component.input.gambar-group model="gambar_sertifikat" label="Upload Gambar Sertifikat">
                        <x-slot name="slot">
                            @if($gambar_sertifikat)
                                <img src="{{ $gambar_sertifikat->temporaryUrl() }}" width="150" class="mt-2 rounded">
                            @elseif($gambar_sertifikat_db)
                                <img src="{{ asset('storage/'.$gambar_sertifikat_db) }}" width="150" class="mt-2 rounded">
                            @endif
                        </x-slot>
                    </x-component.input.gambar-group>

                    <div class="flex flex-col">
                        <label class="mb-2 text-sm font-medium text-gray-400">File Sertifikat (PDF)</label>
                        <input type="file" wire:model="file_sertifikat" accept=".pdf" class="bg-[#1e1e1e] text-gray-200 text-sm rounded-lg block w-full p-2.5 border-none shadow-[inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300">
                        @error('file_sertifikat') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        
                        @if($file_sertifikat_db)
                            <a href="{{ asset('storage/'.$file_sertifikat_db) }}" target="_blank" class="text-blue-400 text-xs mt-1 hover:underline">Lihat File Saat Ini</a>
                        @endif
                    </div>
                </div>

                <div class="col-span-12 grid grid-cols-1 gap-5 my-8">
                    <x-component.button.primary label="{{ $dataId ? 'Simpan Perubahan' : 'Simpan Data' }}" wire:click="save" class="w-full flex"/>
                    <button wire:click="{{$closeEvent}}" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600 rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600 hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] w-full flex items-center justify-center transition-all duration-300">
                        Batal
                    </button> 
                </div>
            </div>
        </div>
    </div>
</div>
