<div class="min-h-screen text-white font-sans pb-20">
    <!-- DYNAMIC BACKGROUND -->
    <div id="tsparticles" class="fixed inset-0 z-[-1] pointer-events-none"></div>

    @if($project)
        <!-- 1. HEADER (FLYER/BANNER) -->
        <div class="relative w-full h-[300px] md:h-[400px] lg:h-[500px] overflow-hidden">

            <!-- Background Image (Flyer) -->
            <div class="absolute inset-0">
                <img src="{{ $project->gambar_flyer ? asset('storage/'.$project->gambar_flyer) : asset('Image.png') }}" 
                     alt="Cover" 
                     class="w-full h-full object-cover object-center"
                >
                <!-- Gradient Overlay (Bottom to Top) -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#12121E] via-[#12121E]/80 to-transparent"></div>
            </div>
        </div>
        <div class="container mx-auto max-w-screen-xl px-5 xl:px-0">
            <!-- 2. IDENTITY SECTION (Overlapping Header) -->
            <div class="container mx-auto px-5 xl:px-0 -mt-32 md:-mt-40 relative z-10 block">
                <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-end">
                    <!-- Project Logo -->
                    <div class="w-32 h-32 md:w-40 md:h-40 bg-[#150b2e] rounded-3xl border-2 border-white/10 shadow-[0_10px_40px_-10px_rgba(168,85,247,0.5)] overflow-hidden flex-shrink-0 mx-auto md:mx-0">
                        <img src="{{ $project->logo_projek ? asset('storage/'.$project->logo_projek) : asset('Image.png') }}" 
                            class="w-full h-full object-cover" 
                            alt="Logo">
                    </div>

                    <!-- Text Info -->
                    <div class="flex-1 text-center md:text-left pb-2">
                        <h1 class="text-3xl md:text-5xl font-bold text-white mb-2 leading-tight">
                            {{ $project->nama_projek }}
                        </h1>
                        
                        <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4 text-purple-300 mb-4 justify-center md:justify-start">
                            <span class="font-bold tracking-wide uppercase text-sm">{{ $project->kategori }}</span>
                            <span class="hidden md:block w-1.5 h-1.5 rounded-full bg-gray-500"></span>
                            
                            @if($project->perusahaan)
                                <span class="text-gray-400 text-sm flex items-center gap-1">
                                    <i class="fas fa-building text-xs"></i> {{ $project->perusahaan }}
                                </span>
                                <span class="hidden md:block w-1.5 h-1.5 rounded-full bg-gray-500"></span>
                            @endif

                            @if($project->posisi)
                                <span class="text-gray-400 text-sm">{{ $project->posisi }}</span>
                            @endif

                            @if(in_array(strtolower($project->tipe_projek), ['product', 'produk']) && $project->harga)
                                <span class="hidden md:block w-1.5 h-1.5 rounded-full bg-gray-500"></span>
                                <span class="text-green-400 font-bold text-lg">
                                    Rp {{ number_format($project->harga, 0, ',', '.') }}
                                </span>
                            @endif
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap justify-center md:justify-start gap-4 mt-6">
                            @if($project->link_website)
                                <a href="{{ $project->link_website }}" target="_blank" class="px-8 py-2.5 rounded-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-bold hover:shadow-[0_0_20px_rgba(139,92,246,0.5)] transition-all transform hover:-translate-y-1">
                                    Kunjungi Website
                                </a>
                            @endif
                            
                            @if($project->link_app)
                                <a href="{{ $project->link_app }}" target="_blank" class="px-8 py-2.5 rounded-full bg-[#1db954] text-white font-bold hover:shadow-[0_0_20px_rgba(29,185,84,0.5)] transition-all transform hover:-translate-y-1">
                                    Download App
                                </a>
                            @endif

                            @if($project->link_github)
                                <a href="{{ $project->link_github }}" target="_blank" class="px-8 py-2.5 rounded-full border border-white/20 bg-white/5 text-white font-bold hover:bg-white/10 transition-all flex items-center gap-2">
                                    <i class="fab fa-github"></i> Repository
                                </a>
                            @endif

                            @if(in_array(strtolower($project->tipe_projek), ['product', 'produk']))
                                <a href="https://wa.me/6281345765427?text=Halo%20saya%20tertarik%20dengan%20produk%20{{ urlencode($project->nama_projek) }}" target="_blank" class="px-8 py-2.5 rounded-full bg-gradient-to-r from-green-500 to-emerald-600 text-white font-bold hover:shadow-[0_0_20px_rgba(34,197,94,0.5)] transition-all transform hover:-translate-y-1 flex items-center gap-2">
                                    <i class="fab fa-whatsapp"></i> Hubungi Saya
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. SLIDER / SCREENSHOTS -->
            @php
                $images = is_string($project->gambar) ? json_decode($project->gambar) : $project->gambar;
            @endphp
            
            @if($images && count($images) > 0)
                <div class="container mx-auto mt-12 mb-12 pl-5 xl:px-0">
                    <!-- Horizontal Scroll Container -->
                    <div class="flex overflow-x-auto pb-8 gap-4 snap-x hide-scrollbar" style="-ms-overflow-style: none; scrollbar-width: none;">
                        @foreach($images as $img)
                            <div class="snap-center shrink-0 w-[280px] md:w-[400px] aspect-video rounded-2xl overflow-hidden border border-white/10 relative group cursor-pointer hover:border-purple-500/50 transition-colors">
                                <img src="{{ asset('storage/'.$img) }}" class="w-full h-full object-cover" alt="Screenshot">
                                <!-- Zoom Icon Overlay -->
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <i class="fas fa-search-plus text-white text-3xl"></i>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- 4. DESCRIPTION & DETAILS -->
            <div class="container mx-auto px-5 xl:px-0 grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Column: Description & Features -->
                <div class="lg:col-span-8 space-y-10">
                    <!-- About Section -->
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2">
                            <span class="text-purple-400">#</span> Tentang Proyek Ini
                        </h3>
                        <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed font-light text-justify">
                            {{ $project->deskripsi_projek }}
                        </div>
                    </div>

                    <!-- Features Section -->
                    @if($project->fitur)
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                            <span class="text-blue-400">#</span> Fitur Utama
                        </h3>
                        <!-- Assuming fitur is text, if array adjust -->
                        @if(is_array($project->fitur) || json_decode($project->fitur, true))
                            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @php
                                    $features = is_array($project->fitur) ? $project->fitur : json_decode($project->fitur, true);
                                @endphp
                                @if($features)
                                    @foreach($features as $fitur)
                                        <li class="flex items-start gap-3 p-3 rounded-xl bg-white/5 hover:bg-white/10 transition-colors">
                                            <i class="fas fa-check-circle text-green-400 mt-1"></i>
                                            <span class="text-gray-300 text-sm">{{ $fitur }}</span>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        @else
                            <div class="prose prose-invert max-w-none text-gray-300 text-justify">
                                    @php
                                        $fiturText = $project->fitur;
                                        // Regex validation to force newlines before list markers
                                        // 1. Numbered lists (1. , 2. )
                                        $fiturText = preg_replace('/(?<!\n)\s+(\d+\.\s)/', "\n\n$1", $fiturText);
                                        // 2. Letter lists (a. , b. ) - cautious to avoid legitimate sentence ends, ensure preceding space
                                        $fiturText = preg_replace('/(?<!\n)\s+([a-zA-Z]\.\s)/', "\n\n$1", $fiturText);
                                        // 3. Bullet points (- )
                                        $fiturText = preg_replace('/(?<!\n)\s+(-\s)/', "\n\n$1", $fiturText);
                                    @endphp
                                    {!! nl2br(e($fiturText)) !!}
                            </div>
                        @endif
                    </div>
                    @endif
                </div>

                <!-- Right Column: Tools & Info -->
                <div class="lg:col-span-4 space-y-8">
                    <!-- Tools Stack -->
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg font-bold text-white mb-6">Teknologi & Alat</h3>
                        <div class="flex flex-wrap gap-2">
                            @php
                                $tools = is_array($project->alat) ? $project->alat : json_decode($project->alat);
                            @endphp
                            @if($tools)
                                @foreach($tools as $tool)
                                    <span class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs text-gray-300 hover:text-white hover:border-purple-500/30 transition-colors cursor-default">
                                        {{ $tool }}
                                    </span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg font-bold text-white mb-6">Informasi Tambahan</h3>
                        <div class="space-y-4 text-sm">
                            <div class="flex justify-between items-center py-2 border-b border-white/5">
                                <span class="text-gray-500">Kategori</span>
                                <span class="text-white font-medium">{{ $project->kategori }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-white/5">
                                <span class="text-gray-500">Tanggal Mulai</span>
                                <span class="text-white font-medium">{{ \Carbon\Carbon::parse($project->tanggal_mulai)->format('d M Y') }}</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-white/5">
                                <span class="text-gray-500">Tanggal Selesai</span>
                                <span class="text-white font-medium">{{ $project->tanggal_akhir ? \Carbon\Carbon::parse($project->tanggal_akhir)->format('d M Y') : 'Sekarang' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- 404 State -->
        <div class="h-screen flex flex-col items-center justify-center text-center px-4">
             <div class="w-24 h-24 mb-6 rounded-full bg-white/5 flex items-center justify-center animate-pulse">
                <i class="fas fa-search text-4xl text-gray-600"></i>
             </div>
             <h1 class="text-2xl font-bold text-white mb-2">Proyek Tidak Ditemukan</h1>
             <p class="text-gray-500 mb-8">Halaman yang Anda cari mungkin telah dihapus atau url salah.</p>
             <a href="{{ route('user.project') }}" class="px-8 py-3 rounded-xl border-2 border-red-500 bg-red-500/10 text-red-500 font-bold hover:bg-red-500/20 transition-all inline-block shadow-lg shadow-red-500/20">
                Kembali ke Portfolio
             </a>
        </div>
    @endif
    <!-- Floating Back Button -->
    <a href="{{ route('user.project') }}" wire:navigate class="fixed bottom-8 right-8 z-[100] px-6 py-3 rounded-2xl border-2 border-red-500 bg-[#12121E]/80 backdrop-blur-xl text-red-500 hover:bg-red-500 hover:text-white transition-all duration-300 flex items-center gap-3 font-bold shadow-[0_0_30px_rgba(239,68,68,0.3)] hover:shadow-[0_0_50px_rgba(239,68,68,0.5)] group transform hover:-translate-y-2">
        <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform duration-300"></i>
        <span>Kembali ke Portfolio</span>
    </a>

    <style>
    /* Hide Scrollbar but allow functionality */
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    </style>
</div>
