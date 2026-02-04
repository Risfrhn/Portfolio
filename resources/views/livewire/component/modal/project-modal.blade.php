<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <slot name="tagSlot"/>
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">{{ $head }}</p>
                    <p class="text-xs w-[300px] text-gray-500">{{$desk}}</p>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
                    <x-component.input.form-group label="Nama Projek" type="text" placeholder="Masukkan Nama Projek" modelValue="nama_projek" readonly="0"/>
                    <x-component.input.form-group label="Nama Perusahaan" type="text" placeholder="Masukkan Nama Perusahaan" modelValue="perusahaan" readonly="0"/>
                    <x-component.input.form-group label="Deskripsi Projek" type="text" placeholder="Masukkan Deskripsi Projek" modelValue="deskripsi_projek" readonly="0"/>
                    <x-component.input.form-group label="Deskripsi Fitur" type="text" placeholder="Masukkan Deskripsi Fitur" modelValue="fitur" readonly="0"/>
                    <x-component.input.form-group label="Harga" type="number" placeholder="Masukkan Harga" modelValue="harga" readonly="0"/>
                </div>
                <div class="col-span-12 grid grid-cols-2 gap-5 mb-5">
                    <x-component.input.form-group label="Tanggal Mulai" type="date" placeholder="Masukkan Tanggal Mulai" modelValue="tanggal_mulai" readonly="0"/>
                    <x-component.input.form-group label="Tanggal Akhir" type="date" placeholder="Masukkan Tanggal Akhir" modelValue="tanggal_akhir" readonly="0"/>
                    <x-component.input.select-group label="Masukkan Posisi" modelValue="posisi"/>
                    <x-component.input.select-group label="Masukkan Tipe Projek" modelValue="tipe_projek"/>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
                    <x-component.input.select-group label="Masukkan Kategori Projek" modelValue="kategori"/>
                    <x-component.input.form-group label="Link Github" type="text" placeholder="Masukkan Link Github" modelValue="link_github" readonly="0"/>
                    <x-component.input.form-group label="Link aplikasi" type="text" placeholder="Masukkan Link aplikasi" modelValue="link_app" readonly="0"/>
                    <x-component.input.form-group label="Link website" type="number" placeholder="Masukkan Link website" modelValue="link_website" readonly="0"/>
                    <livewire:component.input.tag-input />
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mx-5">
                    <x-component.button.primary label="Tambah Data" wire:click="create" class="w-full"/>
                    <button wire:click="tutupModalTambah" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                        Close
                    </button> 
                </div>
            </div>
        </div>
    </div>
</div>
