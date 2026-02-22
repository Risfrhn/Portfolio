<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">{{$head}}</p>
                    <p class="text-xs w-[300px] text-gray-500">{{$desk}}</p>
                </div>
                
                <div class="col-span-12" x-data="{ activeTab: 'keterangan' }">
                    <div class="flex flex-row justify-center items-center">
                        <ul class="relative flex flex-row justify-center items-center w-full py-1.5 px-1.5 gap-3 list-none border-none rounded-lg text-gray-200 placeholder-gray-500 bg-[#1e1e1e] shadow-[inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300" role="list">
                            <li class="text-center flex-1 cursor-pointer" 
                                :class="{ 'bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 rounded-md': activeTab === 'keterangan', 'hover:bg-black hover:rounded-md hover:bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600': activeTab !== 'keterangan' }">
                                <a class="z-30 flex items-center justify-center py-2 w-full"
                                   :class="{ 'text-white': activeTab === 'keterangan', 'bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent hover:text-white': activeTab !== 'keterangan' }"
                                   @click.prevent="activeTab = 'keterangan'"
                                   href="#">
                                   Keterangan
                                </a>
                            </li>
                            <li class="text-center flex-1 cursor-pointer" 
                                :class="{ 'bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 rounded-md': activeTab === 'gambar', 'hover:bg-black hover:rounded-md hover:bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600': activeTab !== 'gambar' }">
                                <a class="z-30 flex items-center justify-center py-2 w-full"
                                   :class="{ 'text-white': activeTab === 'gambar', 'bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent hover:text-white': activeTab !== 'gambar' }"
                                   @click.prevent="activeTab = 'gambar'"
                                   href="#">
                                   Gambar
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <!-- Tab Keterangan -->
                        <div x-show="activeTab === 'keterangan'" class="space-y-4">
                            <div class="col-span-12 my-2 grid grid-cols-2 gap-5">
                                <x-Component.Input.select-group label="Posisi / Role" model="posisi" :options="$posisiOptions"/>
                                <x-Component.Input.select-group label="Tipe Pekerjaan" model="tipe_pekerjaan" :options="$tipePekerjaanOptions"/>
                            </div>
                            <div class="col-span-12 my-2">
                                <x-Component.Input.form-group label="Perusahaan / Project" type="text" model="perusahaan" placeholder="Nama perusahaan atau project"/>
                            </div>
                            
                            <div class="col-span-12 my-2 grid grid-cols-2 gap-5">
                                <x-Component.Input.form-group label="Tanggal Mulai" type="date" placeholder="Tanggal Mulai" model="tanggal_mulai" readonly="0"/>
                                
                                <div class="flex flex-col">
                                     <div x-show="!$wire.masih_bekerja">
                                        <x-Component.Input.form-group label="Tanggal Akhir" type="date" placeholder="Tanggal Akhir" model="tanggal_akhir" readonly="0"/>
                                     </div>
                                     <div class="mt-2 flex items-center">
                                        <input type="checkbox" wire:model.live="masih_bekerja" id="masih_bekerja" class="mr-2">
                                        <label for="masih_bekerja" class="text-sm text-gray-400">Masih Bekerja / Present</label>
                                     </div>
                                </div>
                            </div>

                            <div class="col-span-12 my-2">
                                <x-Component.Input.form-group label="Deskripsi Pekerjaan" model="deskripsi" placeholder="Apa yang kamu kerjakan..."/>
                            </div>
                            
                            <div class="col-span-12 my-2">
                                <x-Component.Input.form-group label="Achievement / Impact" model="pencapaian" placeholder="Project selesai tepat waktu, traffic naik..."/>
                            </div>

                            <div class="col-span-12 my-2">
                                <label class="block text-sm font-medium text-gray-400 mb-2">Tools / Tech Stack</label>
                                <livewire:component.Input.tag-input :tags="$teknologi"/>
                            </div>
                        </div>

                        <!-- Tab Gambar -->
                        <div x-show="activeTab === 'gambar'" class="space-y-4" style="display: none;">
                            <div class="col-span-12 my-2">
                                <!-- Logo (Single) -->
                                <x-Component.Input.gambar-group model="logo" label="Masukkan Logo Perusahaan">
                                    <x-slot name="slot">
                                        @if($logo)
                                            <img src="{{ $logo->temporaryUrl() }}" width="150" class="rounded-lg">
                                        @elseif($logo_db)
                                            <img src="{{ asset('storage/'.$logo_db) }}" width="150" class="rounded-lg">
                                        @endif
                                    </x-slot>
                                </x-component.Input.gambar-group>

                                <!-- Flyer (Single) -->
                                <x-Component.Input.gambar-group model="flyer" label="Masukkan Gambar Flyer">
                                    <x-slot name="slot">
                                        @if($flyer)
                                            <img src="{{ $flyer->temporaryUrl() }}" width="150" class="rounded-lg">
                                        @elseif($flyer_db)
                                            <img src="{{ asset('storage/'.$flyer_db) }}" width="150" class="rounded-lg">
                                        @endif
                                    </x-slot>
                                </x-component.Input.gambar-group>

                                <!-- Gallery (Multi) -->
                                <div class="flex flex-col mt-5">
                                    <p class="mb-2 text-gray-500">Galeri Project (Multi)</p>
                                    <div class="flex gap-2">
                                        <div class="bg-blackborder-none rounded-lg block w-full px-3 py-2.5 text-gray-200 placeholder-gray-500 pr-10 bg-[#1e1e1e] shadow-inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300">
                                            <input type="file" wire:model="tempImages" multiple>
                                        </div>
                                        <button wire:click="add()" class="bg-blue-500 text-white px-4 rounded hover:bg-blue-600 transition">Tambah</button>
                                    </div>
                                    <p class="my-2 text-gray-500">Preview:</p>
                                    <div class="flex flex-nowrap gap-2 mt-3 mb-10 overflow-x-auto">
                                        @foreach($gambar as $index => $image)
                                            <div wire:key="images-{{ $index }}" class="flex items-center gap-1 shrink-0">
                                                <div class="relative inline-block">
                                                    @if(is_object($image) && method_exists($image,'temporaryUrl'))
                                                        <img src="{{ $image->temporaryUrl() }}" width="150" class="rounded-lg">
                                                    @else
                                                        <img src="{{ asset('storage/'.$image) }}" width="150" class="rounded-lg">
                                                    @endif
                                                    <button 
                                                        type="button"
                                                        wire:click="remove({{ $index }})"
                                                        class="absolute top-2 right-2 px-2 py-1 bg-red-500 rounded text-white text-xs hover:bg-red-600 transition">
                                                        Hapus
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 grid grid-cols-1 gap-5 mb-5 mx-5">
                    <x-Component.Button.primary label="Simpan Experience" wire:click="save" class="w-full flex justify-center"/>
                    <button wire:click="{{$closeEvent}}" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-all duration-300">
                        Close
                    </button> 
                </div>        
            </div>
        </div>
    </div>
</div>
