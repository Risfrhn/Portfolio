<div>
    <div class="w-full mt-5">
        <div class="absolute z-1 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
        <div class="hidden  md:block absolute w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-30 animate-flare-slow blur-[150px] bottom-[800px] xl:bottom-[40px] right-[0px]"></div>

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-3 m-5">
            <h2 class="text-4xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Table Sertifikat</h2>
            <div class="flex flex-col lg:flex-row flex-wrap ms-auto gap-2 mt-3 lg:mt-0 w-full lg:w-auto">
                {{-- Search Input --}}
                <div class="inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] w-full lg:w-auto">
                    <input wire:model.live="search" class="w-full lg:w-60 relative px-2 md:px-4 py-2.5 transition-all ease-in duration-75 bg-[#0b0b14] rounded-md" placeholder="Search branch name..." required />
                </div>

                {{-- Add Button --}}
                <button wire:click="bukaModalTambah" class="relative inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:from-purple-600 hover:to-blue-500 cursor-pointer w-full lg:w-auto">
                    <span class="w-full text-center px-2 md:px-4 py-2.5 bg-[#0b0b14] rounded-md transition-all duration-150 ease-in-out group-hover:bg-transparent">
                        Tambah Data Sertifikat
                    </span>
                </button>
            </div>
        </div>
    </div>

    <livewire:component.table.sertifikat-table
        :sertifikat="$sertifikat"
    />

    @if($showModalDelete)
        <livewire:component.alert.alert-konfirmasi
            dataId="$sertifikatId"
            head="Hapus Data Sertifikat"
            desk="Apakah Anda yakin ingin menghapus data sertifikat ini?"
            action="delete-sertifikat"
            closeEvent="tutupModalDeleteSertifikat"
        />
    @endif

    @if($showModalTambah)
        <livewire:component.modal.sertifikat-modal 
            closeEvent="tutupModalTambah"
            head="Tambah Data Sertifikat"
            desk="Silahkan tambah data sertifikat terbaru anda"
        />
    @endif
</div>
