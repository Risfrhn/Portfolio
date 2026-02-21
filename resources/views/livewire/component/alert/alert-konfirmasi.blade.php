<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">{{ $head }}</p>
                    <p class="text-md w-[300px] text-gray-500">{{ $desk }}</p>
                </div>
                <div class="col-span-12 grid grid-cols-12 gap-5 mb-5">
                    <div class="col-span-6">
                        <x-Component.button.primary label="Tidak" wire:click="{{$closeEvent}}" class="w-full"/>
                    </div>
                    <div class="col-span-6">
                        <button wire:click="confirm" class=" w-full text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                            Ya, saya yakin
                        </button> 
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>
