<div class="container mx-auto max-w-screen-xl px-5 xl:px-0 min-h-screen pt-32 pb-20">
    <!-- Header -->
    <div class="text-center mb-12">
        <div class="inline-block px-4 py-1.5 mb-4 rounded-full border border-purple-500/30 bg-purple-900/20 backdrop-blur-md">
            <span class="text-purple-300 font-bold tracking-[0.2em] text-[10px] md:text-xs uppercase">Prestasi</span>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold bg-gradient-to-r from-purple-400 via-pink-500 to-red-500 bg-clip-text text-transparent mb-4">
            Sertifikat & Penghargaan
        </h1>
        <p class="text-gray-400 text-sm md:text-base font-light max-w-2xl mx-auto">
            Bukti kompetensi dan pengembangan diri melalui berbagai pelatihan dan workshop.
        </p>
    </div>

    <!-- Search Bar -->
    <div class="mb-12">
        <div class="relative max-w-xl mx-auto group">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur opacity-25 group-hover:opacity-50 transition-opacity duration-300"></div>
            <div class="relative bg-[#150b2e] border border-white/10 rounded-full flex items-center p-2 shadow-lg group-hover:border-purple-500/30 transition-all">
                <div class="pl-4 pr-2 text-gray-400">
                    <i class="fas fa-search"></i>
                </div>
                <input wire:model.live.debounce.300ms="search" type="text" placeholder="Cari sertifikat..." 
                    class="w-full bg-transparent border-none text-white placeholder-gray-500 focus:ring-0 text-sm md:text-base py-2 focus:outline-none">
            </div>
        </div>
    </div>

    <!-- Sertifikat Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @if($dataSertifikat->count() > 0)
            @foreach($dataSertifikat as $item)
            <a href="{{ route('user.sertifikat.detail', $item->id) }}" class="group relative bg-[#150b2e] border border-white/10 rounded-2xl overflow-hidden hover:border-purple-500/50 transition-all duration-300 hover:shadow-[0_0_30px_rgba(139,92,246,0.3)] flex flex-col h-full transform hover:-translate-y-2">
                <!-- Image -->
                <div class="relative h-48 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#150b2e] to-transparent z-10 opacity-60"></div>
                    <img src="{{ $item->gambar_sertifikat ? asset('storage/'.$item->gambar_sertifikat) : asset('Image.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="{{ $item->judul }}">
                </div>
                
                <!-- Content -->
                <div class="p-6 flex flex-col flex-grow relative z-20">
                    <div class="mb-4">
                        <span class="text-xs font-bold px-2 py-1 rounded bg-purple-500/20 text-purple-300 border border-purple-500/30">
                            {{ \Carbon\Carbon::parse($item->tanggal_terbit)->format('M Y') }}
                        </span>
                    </div>
                
                    <h3 class="text-xl font-bold text-white mb-2 group-hover:text-purple-400 transition-colors line-clamp-2">
                        {{ $item->judul }}
                    </h3>
                    
                    <p class="text-gray-400 text-sm mb-4 line-clamp-2">
                        {{ $item->nama_institusi }}
                    </p>

                    <div class="mt-auto pt-4 border-t border-white/5 flex items-center justify-between">
                         <span class="text-xs text-gray-500">{{ $item->nomor_sertifikat }}</span>
                         <span class="text-sm font-medium text-purple-400 group-hover:translate-x-1 transition-transform flex items-center gap-1">
                            Lihat Detail <i class="fas fa-arrow-right text-xs"></i>
                         </span>
                    </div>
                </div>
            </a>
            @endforeach
        @else
             <x-Component.State.empty-state 
                title="Tidak ada sertifikat ditemukan" 
                description="Coba ubah kata kunci pencarian Anda." 
                actionLabel="Reset Pencarian"
                actionWireClick="$set('search', '')"
            />
        @endif
    </div>

    <!-- Pagination -->
    <div class="mt-12">
        {{ $dataSertifikat->links('livewire.component.pagination.custom') }}
    </div>
</div>
