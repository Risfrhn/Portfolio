<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">Edit data landing</p>
                    <p class="text-xs w-[300px] text-gray-500">Silahkan update landing page dengan data yang baru</p>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
                    <x-component.input.form-group label="Header" type="text" placeholder="Masukkan text" model="header" readonly="0"/>
                    <x-component.input.form-group label="CV" type="file" placeholder="Masukkan file" model="CV" readonly="0"/>
                    <x-component.input.form-group label="Deskripsi tentang" type="text" placeholder="Masukkan text" model="tentang" readonly="0"/>
                    <livewire:component.input.tag-input :tags="$skill"/>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mb-5">
                    <x-component.button.primary label="Update Landing Data" wire:click="save" class="w-full"/>
                    <button wire:click="close" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                        Close
                    </button> 
                </div>        
            </div>
        </div>
    </div>
</div>
