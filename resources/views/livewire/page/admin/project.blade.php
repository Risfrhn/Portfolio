<div>
    <div class="w-full mt-5">
        <div class="flex lg:flex-row lg:items-center lg:justify-between gap-3 m-5">
            <h2 class="text-4xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Table project</h2>
            <div class="flex flex-wrap ms-auto md:flex-nowrap gap-2 md:mt-0">
                <div class="inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                    <input wire:model.live="search" class="w-40 md:w-60 relative px-2 md:px-4 py-2.5 transition-all ease-in duration-75 bg-[#0b0b14] rounded-md" placeholder="Search branch name..." required />
                </div>
                <label class="relative inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:from-purple-600 hover:to-blue-500 cursor-pointer">
                    <span class="px-2 md:px-4 py-2.5 bg-[#0b0b14] rounded-md transition-all duration-150 ease-in-out group-hover:bg-transparent">
                        Filter Type
                    </span>
                    <select wire:model.live="filter" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer bg-gray-600">
                        <option value="">All categories</option>
                        <option value="portfolio">Portfolio</option>
                        <option value="product">Product</option>
                    </select>
                </label>
                <button wire:click="bukaModal" class="relative inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:from-purple-600 hover:to-blue-500 cursor-pointer">
                    <span class="px-2 md:px-4 py-2.5 bg-[#0b0b14] rounded-md transition-all duration-150 ease-in-out group-hover:bg-transparent">
                        Tambah Data Projek
                    </span>
                </button>
            </div>
        </div>
        <livewire:component.table.project-table 
            :project="$project" 
            :actions="['edit' => 'bukaModalEdit', 'delete' => 'bukaModalDelete']"
            editFungsi="bukaModalEdit"
            deleteFungsi="bukaModalDelete"
        />

        @if($showModal)
            <livewire:component.modal.project-modal 
                head="Tambah Projek" 
                desk="Silahkan tambah data projek terbaru anda"
                closeEvent="tutupModal"
            />
        @endif

        @if($showModalDelete)
            <livewire:component.alert.alert-konfirmasi 
                :dataId="$projectId"
                head="Delete Projek" 
                desk="Apakah anda yakin ingin menghapus data ini?"
                action="delete"
                closeEvent="close-modal-delete"
            />
        @endif

        @if($showModalEdit)
            <livewire:component.modal.project-modal 
                :dataId="$projectId"
                head="Edit Projek" 
                desk="Silahkan edit data projek"
                closeEvent="tutupModalEdit"
            />
        @endif
    </div>
</div>
