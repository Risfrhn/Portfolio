<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">{{ $head }}</p>
                    <p class="text-xs w-[300px] text-gray-500">{{$desk}}</p>
                </div>
                <div class="col-span-12">
                     <x-component.input.form-group label="Name" type="text" model="nama_projek" placeholder="Masukkan nama project"/>
                </div>
                <div class="col-span-12">
                     <x-component.input.form-group label="Perusahaan" type="text" model="perusahaan" placeholder="Masukkan nama perusahaan"/>
                </div>
                <div class="col-span-12">
                     <x-component.input.form-group label="Deskripsi" type="text" model="deskripsi_projek" placeholder="Masukkan deskripsi project"/>
                </div>
                <!-- Row 2 -->
                <div class="col-span-12 grid grid-cols-2 gap-5">
                    <x-component.input.select-group label="Tipe" model="tipe_projek" :options="$tipeOptions"/>
                    <x-component.input.form-group label="Harga" type="text" model="harga" placeholder="Masukkan harga project"/>
                </div>
                <!-- Row 3 -->
                <div class="col-span-12">
                    <x-component.input.form-group label="Fitur" type="text" model="fitur" placeholder="Masukkan fitur project"/>
                </div>
                <div class="col-span-12 grid grid-cols-2 gap-5">
                    <x-component.input.form-group label="Tanggal Mulai" type="date" placeholder="Masukkan Tanggal Mulai" model="tanggal_mulai" readonly="0"/>
                    <x-component.input.form-group label="Tanggal Akhir" type="date" placeholder="Masukkan Tanggal Akhir" model="tanggal_akhir" readonly="0"/>
                </div>
                <!-- Row 4 -->
                <div class="col-span-12 grid grid-cols-2 gap-5">
                    <x-component.input.select-group label="Posisi" model="posisi" :options="$posisiOptions"/>
                    <x-component.input.select-group label="Kategori" model="kategori" :options="$kategoriOptions"/>
                </div>
                <!-- Row 5 -->
                <div class="col-span-12 grid grid-cols-1 gap-5">
                    <x-component.input.form-group label="Link Github" type="text" placeholder="Masukkan Link Github" model="link_github" readonly="0"/>
                    <x-component.input.form-group label="Link aplikasi" type="text" placeholder="Masukkan Link aplikasi" model="link_app" readonly="0"/>
                    <x-component.input.form-group label="Link website" type="text" placeholder="Masukkan Link website" model="link_website" readonly="0"/>
                </div>
                <div class="col-span-12">
                      <livewire:component.input.tag-input :tags="$alat"/>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mx-5 ">
                   <x-component.button.primary label="{{ $dataId ? 'Update Data' : 'Tambah Data' }}" wire:click="save" class="w-full flex"/>
                    <button wire:click="{{$closeEvent}}" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] w-full flex items-center justify-center">
                        Close
                    </button> 
                </div>
            </div>
        </div>
    </div>
</div>
