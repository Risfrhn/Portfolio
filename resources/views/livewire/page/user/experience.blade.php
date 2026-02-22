<div class="container mx-auto max-w-screen-xl px-5 xl:px-0 min-h-screen pt-32 pb-20">
    <!-- DYNAMIC BACKGROUND (TS Particles Plugin) -->
    <div id="tsparticles" class="fixed inset-0 z-[-1] pointer-events-none"></div>

    <!-- Header -->
    <div class="text-center mb-12">
        <div class="inline-block px-4 py-1.5 mb-4 rounded-full border border-purple-500/30 bg-purple-900/20 backdrop-blur-md">
            <span class="text-purple-300 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Profesional</span>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 bg-clip-text text-transparent mb-4">
            Pengalaman Kerja
        </h1>
        <p class="text-gray-400 text-sm md:text-base font-light max-w-2xl mx-auto">
            Perjalanan karir dan kontribusi profesional saya dalam industri teknologi.
        </p>
    </div>

    <!-- Search & Filter Section -->
    <div class="mb-12 space-y-4">
        <!-- Search Bar -->
        <div class="relative max-w-2xl mx-auto group">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur opacity-25 group-hover:opacity-50 transition-opacity duration-300"></div>
            <div class="relative bg-[#150b2e] border border-white/10 rounded-full flex items-center p-2 shadow-lg group-hover:border-purple-500/30 transition-all">
                <div class="pl-4 pr-2 text-gray-400">
                    <i class="fas fa-search"></i>
                </div>
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Cari berdasarkan nama perusahaan..." 
                    class="w-full bg-transparent border-none text-white placeholder-gray-500 focus:ring-0 text-sm md:text-base py-2 focus:outline-none">
            </div>
        </div>

        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-4">
            <!-- Type Filter -->
             <div class="relative">
                <select wire:model.live="filterType" class="appearance-none bg-[#150b2e] border border-white/10 text-gray-300 py-2 pl-4 pr-10 rounded-full text-sm focus:outline-none focus:border-purple-500 cursor-pointer hover:bg-white/5 transition-colors">
                    <option value="">Semua Tipe Pekerjaan</option>
                    @foreach($types as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
            </div>

            <!-- Position Filter -->
            <div class="relative">
                <select wire:model.live="filterPosition" class="appearance-none bg-[#150b2e] border border-white/10 text-gray-300 py-2 pl-4 pr-10 rounded-full text-sm focus:outline-none focus:border-purple-500 cursor-pointer hover:bg-white/5 transition-colors">
                    <option value="">Semua Posisi</option>
                     @foreach($positions as $pos)
                        <option value="{{ $pos }}">{{ $pos }}</option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-gray-500">
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Experience Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @if($dataExperience->count() > 0)
            @foreach($dataExperience as $item)
                {{-- Using Project Thumbnail Component with mapped data --}}
                <x-Component.Card.project-thumbnail 
                    link="{{ route('user.experience.detail', $item->id) }}" 
                    image="{{ $item->logo ? asset('storage/'.$item->logo) : asset('Image.png') }}" 
                    name="{{ $item->posisi }}" 
                    type="{{ $item->perusahaan }}" 
                    desc="{{ $item->deskripsi }}" 
                />
            @endforeach
        @else
            <x-Component.State.empty-state 
                title="Tidak ada data ditemukan" 
                description="Coba ubah kata kunci pencarian atau filter Anda." 
                actionLabel="Reset Pencarian"
                actionWireClick="$set('search', '')"
            />
        @endif
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $dataExperience->links('livewire.component.pagination.custom') }}
    </div>
</div>

</div>
