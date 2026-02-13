<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
        <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
            <div class="grid grid-cols-12 p-5">
                <div class="col-span-12 text-center flex flex-col justify-center items-center mb-10">
                    <img src="/Forms.gif" alt="" class="w-20">
                    <p class="text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent my-3">{{ $head }}</p>
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
                            <li class="text-center flex-1 cursor-pointer" 
                                :class="{ 'bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 rounded-md': activeTab === 'link', 'hover:bg-black hover:rounded-md hover:bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600': activeTab !== 'link' }">
                                <a class="z-30 flex items-center justify-center py-2 w-full"
                                   :class="{ 'text-white': activeTab === 'link', 'bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent hover:text-white': activeTab !== 'link' }"
                                   @click.prevent="activeTab = 'link'"
                                   href="#">
                                   Link
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <div x-show="activeTab === 'keterangan'" class="space-y-4">
                            <div class="col-span-12 my-2">
                                <x-component.input.form-group label="Name" type="text" model="nama_projek" placeholder="Masukkan nama project"/>
                            </div>
                            <div class="col-span-12 my-2">
                                <x-component.input.form-group label="Perusahaan" type="text" model="perusahaan" placeholder="Masukkan nama perusahaan"/>
                            </div>
                            <div class="col-span-12 my-2">
                                <x-component.input.form-group label="Deskripsi" type="text" model="deskripsi_projek" placeholder="Masukkan deskripsi project"/>
                            </div>
                            <!-- Row 2 -->
                            <div class="col-span-12 my-2 grid grid-cols-2 gap-5">
                                <x-component.input.select-group label="Tipe" model="tipe_projek" :options="$tipeOptions"/>
                                <x-component.input.form-group label="Harga" type="text" model="harga" placeholder="Masukkan harga project"/>
                            </div>
                            <!-- Row 3 -->
                            <div class="col-span-12 my-2">
                                <x-component.input.form-group label="Fitur" type="text" model="fitur" placeholder="Masukkan fitur project"/>
                            </div>
                            <div class="col-span-12 my-2 grid grid-cols-2 gap-5">
                                <x-component.input.form-group label="Tanggal Mulai" type="date" placeholder="Masukkan Tanggal Mulai" model="tanggal_mulai" readonly="0"/>
                                <x-component.input.form-group label="Tanggal Akhir" type="date" placeholder="Masukkan Tanggal Akhir" model="tanggal_akhir" readonly="0"/>
                            </div>
                            <!-- Row 4 -->
                            <div class="col-span-12 my-2 grid grid-cols-2 gap-5">
                                <x-component.input.select-group label="Posisi" model="posisi" :options="$posisiOptions"/>
                                <x-component.input.select-group label="Kategori" model="kategori" :options="$kategoriOptions"/>
                            </div>
                            <div class="col-span-12 my-2">
                                <livewire:component.input.tag-input :tags="$alat"/>
                            </div>
                        </div>

                        <div x-show="activeTab === 'gambar'" class="space-y-4" style="display: none;">
                            <div class="col-span-12 my-2">
                                <x-component.input.gambar-group model="logo_projek" label="Masukkan logo projek">
                                    <x-slot name="slot">
                                        @if($logo_projek)
                                            <img src="{{ $logo_projek->temporaryUrl() }}" width="150">
                                        @elseif($logo_projek_db)
                                            <img src="{{ asset('storage/'.$logo_projek_db) }}" width="150">
                                        @endif
                                    </x-slot>
                                </x-component.input.gambar-group>

                                <x-component.input.gambar-group model="gambar_flyer" label="Masukkan gambar flyer">
                                    <x-slot name="slot">
                                        @if($gambar_flyer)
                                            <img src="{{ $gambar_flyer->temporaryUrl() }}" width="150">
                                        @elseif($gambar_flyer_db)
                                            <img src="{{ asset('storage/'.$gambar_flyer_db) }}" width="150">
                                        @endif
                                    </x-slot>
                                </x-component.input.gambar-group>
                                <div class="flex flex-col">
                                    <p class="mb-2 text-gray-500">Masukkan gambar</p>
                                    <div class="flex gap-2">
                                        <div class="bg-blackborder-none rounded-lg block w-full px-3 py-2.5 text-gray-200 placeholder-gray-500 pr-10 bg-[#1e1e1e] shadow-inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300">
                                            <input type="file" wire:model="tempImages" multiple>
                                        </div>
                                        <button wire:click="add()" class="bg-blue-500 text-white px-4 rounded">Tambah</button>
                                    </div>
                                    <p class="my-2 text-gray-500">Preview:</p>
                                    <div class="flex flex-nowrap gap-2 mt-3 mb-10 overflow-x-auto">
                                        @if(!$dataId)
                                            @foreach($gambar as $data => $image)
                                                <div wire:key="images-{{ $data }}" class="flex items-center gap-1 shrink-0">
                                                    <div class="relative inline-block">
                                                    @if(is_object($image) && method_exists($image,'temporaryUrl'))
                                                            <img src="{{ $image->temporaryUrl() }}" width="150">
                                                        @else
                                                            <img src="{{ asset('storage/'.$image) }}" width="150">
                                                        @endif
                                                        <button 
                                                            type="button"
                                                            wire:click="remove({{ $data }})"
                                                            class="absolute top-2 right-2 px-2 py-1 bg-red-500 rounded text-white text-xs">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            @foreach($gambar as $data => $image)
                                                <div wire:key="images-{{ $data }}" class="flex items-center gap-1 shrink-0">
                                                    <div class="relative inline-block">
                                                        @if(is_object($image) && method_exists($image,'temporaryUrl'))
                                                            <img src="{{ $image->temporaryUrl() }}" width="150">
                                                        @else
                                                            <img src="{{ asset('storage/'.$image) }}" width="150">
                                                        @endif
                                                        <button 
                                                            type="button"
                                                            wire:click="remove({{ $data }})"
                                                            class="absolute top-2 right-2 px-2 py-1 bg-red-500 rounded text-white text-xs">
                                                            Hapus
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-show="activeTab === 'link'" class="space-y-4" style="display: none;">
                            <div class="col-span-12 my-2 grid grid-cols-1 gap-5">
                                <x-component.input.form-group label="Link Github" type="text" placeholder="Masukkan Link Github" model="link_github" readonly="0"/>
                                <x-component.input.form-group label="Link aplikasi" type="text" placeholder="Masukkan Link aplikasi" model="link_app" readonly="0"/>
                                <x-component.input.form-group label="Link website" type="text" placeholder="Masukkan Link website" model="link_website" readonly="0"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 grid grid-cols-1 gap-5 my-4">
                   <x-component.button.primary label="{{ $dataId ? 'Update Data' : 'Tambah Data' }}" wire:click="save" class="w-full flex"/>
                    <button wire:click="{{$closeEvent}}" class="text-sm font-medium mx-2 md:mx-0 py-[8px] px-10 text-white text-red-600  rounded-full shadow-lg border-2 border-red-600 hover:bg-red-600  hover:text-white hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] w-full flex items-center justify-center">
                        Close
                    </button> 
                </div>
            </div>
        </div>
    </div>
</div>
