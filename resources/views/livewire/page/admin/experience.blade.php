<div>
    <div class="w-full mt-5">
        <div class="absolute z-1 w-[300px] h-[300px] md:w-[400px] md:h-[400px]  rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-40 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
        <div class="hidden  md:block absolute w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-30 animate-flare-slow blur-[150px] bottom-[800px] xl:bottom-[40px] right-[0px]"></div>

        <div class="flex flex-col xl:flex-row gap-3">
            <h2 class="text-4xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">Table pengalaman</h2>
            <div class="flex flex-col xl:flex-row ms-auto gap-2 mt-3 lg:mt-0 w-full xl:w-auto">
                {{-- Search Input --}}
                <div class="inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] w-full lg:w-auto">
                    <input wire:model.live="search" class="w-full xl:w-60 relative px-2 md:px-4 py-2.5 transition-all ease-in duration-75 bg-[#0b0b14] rounded-md" placeholder="Search branch name..." required />
                </div>
                
                <div class="flex flex-row gap-3">
                    {{-- Filter --}}
                    <label class="relative inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:from-purple-600 hover:to-blue-500 cursor-pointer w-full xl:w-auto">
                        <span class="w-full text-center px-2 md:px-4 py-2.5 bg-[#0b0b14] rounded-md transition-all duration-150 ease-in-out group-hover:bg-transparent">
                            Filter Type
                        </span>
                        <select wire:model.live="filter" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer bg-gray-600">
                            <option value="">Semua kategori</option>
                            <option value="Internship">Internship</option>
                            <option value="Full_Time">Full Time</option>
                            <option value="Freelance">Freelance</option>
                            <option value="Contract">Contract</option>
                            <option value="Part_Time">Part Time</option>
                        </select>
                    </label>
                    {{-- Filter Posisi --}}
                    <label class="relative inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:from-purple-600 hover:to-blue-500 cursor-pointer w-full xl:w-auto">
                        <span class="w-full text-center px-2 md:px-4 py-2.5 bg-[#0b0b14] rounded-md transition-all duration-150 ease-in-out group-hover:bg-transparent">
                            Filter Posisi
                        </span>
                        <select wire:model.live="filterPosisi" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer bg-gray-600">
                            <option value="">Semua posisi</option>
                            <option value="Backend Developer">Backend Developer</option>
                            <option value="Frontend Developer">Frontend Developer</option>
                            <option value="Fullstack Developer">Fullstack Developer</option>
                            <option value="Mobile Developer">Mobile Developer</option>
                            <option value="UI/UX Designer">UI/UX Designer</option>
                            <option value="System Analyst">System Analyst</option>
                            <option value="DevOps Engineer">DevOps Engineer</option>
                            <option value="Project Manager">Project Manager</option>
                        </select>
                    </label>

                    {{-- Add Button --}}
                    <button wire:click="bukaModalTambah" class="relative inline-flex items-center justify-center p-0.5 text-xs md:text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:from-purple-600 hover:to-blue-500 cursor-pointer w-full xl:w-auto">
                        <span class="w-full text-center px-2 md:px-4 py-2.5 bg-[#0b0b14] rounded-md transition-all duration-150 ease-in-out group-hover:bg-transparent">
                            Tambah Data
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <livewire:component.table.table-experience
            :experience="method_exists($experience, 'items') ? $experience->items() : []"
        />
        <div class="mt-4 px-4">
            {{ $experience->onEachSide(1)->links('vendor.pagination.custom') }}
        </div>


        @if($showModalTambah)
            <livewire:component.modal.experience-modal 
                closeEvent="closeModalTambah"
                head="Tambah Projek" 
                desk="Silahkan tambah data projek terbaru anda"
            />
        @endif

        @if($showModalDelete)
            <livewire:component.alert.alert-konfirmasi 
                :dataId="$experienceId"
                head="Delete Pengalaman" 
                desk="Apakah anda yakin ingin menghapus data ini?"
                action="delete-experience"
                closeEvent="tutupModalDeleteExperience"
            />
        @endif

        @if($showModalEdit)
            <livewire:component.modal.experience-modal 
                :dataId="$experienceId"
                closeEvent="closeModalEdit"
                head="Edit Pengalaman" 
                desk="Silahkan edit data pengalaman anda"
            />
        @endif

    </div>
</div>
