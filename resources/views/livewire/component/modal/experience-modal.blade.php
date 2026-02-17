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
                    <x-component.input.form-group label="Header" type="text" model="header" placeholder="Masukkan header baru"/>
                    <div class="col-span-12">
                        <x-component.input.form-group label="Sub Header" type="text" model="subHeader" placeholder="Software Engineer"/>
                    </div>
                    <!-- Row 2 -->
                    <div class="col-span-12 grid grid-cols-2 gap-5">
                        <x-component.input.form-group label="Header Box 1" type="text" model="headerBox1" placeholder="5+ Years"/>
                        <x-component.input.form-group label="Deskripsi Box 1" type="text" model="descSubHeaderBox1" placeholder="Experience"/>
                    </div>
                    <!-- Row 3 -->
                    <div class="col-span-12 grid grid-cols-2 gap-5">
                         <x-component.input.form-group label="Header Box 2" type="text" model="headerBox2" placeholder="20+"/>
                         <x-component.input.form-group label="Deskripsi Box 2" type="text" model="descSubHeaderBox2" placeholder="Projects"/>
                    </div>

                    <div class="col-span-12">
                        <x-component.input.form-group label="Tentang" type="textarea" model="tentang" placeholder="Tentang saya.."/>
                    </div>
                    <div class="col-span-12">
                        <x-component.input.form-group label="CV" type="file" model="CV" placeholder="CV / Resume"/>
                    </div>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 mb-5 mx-5">
                    <x-component.button.primary label="Update Landing Data" wire:click="save" class="w-full"/>
                    <button wire:click="{{$closeEvent}}" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                        Close
                    </button> 
                </div>        
            </div>
        </div>
    </div>
</div>
