<div class="min-h-screen bg-[#0a0118] text-white pb-20">
    <!-- DYNAMIC BACKGROUND (TS Particles Plugin) -->
    <div id="tsparticles" class="fixed inset-0 z-0 pointer-events-none"></div>

    @if($experience)
        <!-- 1. HERO HEADER (Flyer) -->
        <div class="relative h-[40vh] md:h-[50vh] w-full overflow-hidden">
            @if($experience->flyer)
                <img src="{{ asset('storage/' . $experience->flyer) }}" alt="{{ $experience->perusahaan }}" class="w-full h-full object-cover">
            @else
                <div class="w-full h-full bg-gradient-to-br from-purple-900 via-[#1a103c] to-[#0a0118]"></div>
            @endif
            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0a0118] via-[#0a0118]/40 to-transparent"></div>
            
        </div>

        <!-- 2. IDENTITY SECTION -->
        <div class="container mx-auto px-5 xl:px-0 -mt-20 md:-mt-24 relative z-10 mb-12">
            <div class="flex flex-col md:flex-row items-end gap-6 md:gap-8">
                <!-- Logo -->
                <div class="w-32 h-32 md:w-40 md:h-40 rounded-3xl bg-[#150b2e] border-4 border-[#0a0118] shadow-2xl overflow-hidden p-2 flex-shrink-0">
                    <div class="w-full h-full rounded-2xl bg-white/5 flex items-center justify-center overflow-hidden">
                        @if($experience->logo)
                            <img src="{{ asset('storage/' . $experience->logo) }}" alt="{{ $experience->perusahaan }}" class="w-full h-full object-contain p-2">
                        @else
                            <i class="fas fa-building text-3xl text-purple-500"></i>
                        @endif
                    </div>
                </div>

                <!-- Basic Info -->
                <div class="flex-grow pb-2">
                    <h1 class="text-3xl md:text-5xl font-bold text-white mb-2 tracking-tight">{{ $experience->perusahaan }}</h1>
                    <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-gray-400">
                        <span class="text-purple-400 font-semibold text-lg">{{ $experience->posisi }}</span>
                        <span class="hidden md:block w-1.5 h-1.5 rounded-full bg-gray-500"></span>
                        <span class="text-sm">{{ $experience->tipe_pekerjaan }}</span>
                    </div>
                </div>

                <!-- Action Buttons (Website/App Links) -->
                <div class="flex items-center gap-3 pb-2 w-full md:w-auto">
                    @if($experience->link_website)
                        <a href="{{ $experience->link_website }}" target="_blank" class="flex-1 md:flex-none px-6 py-3 rounded-xl bg-purple-600 hover:bg-purple-700 text-white font-bold text-center transition-all shadow-lg shadow-purple-900/20">
                            Kunjungi Website
                        </a>
                    @endif
                    @if($experience->link_app)
                        <a href="{{ $experience->link_app }}" target="_blank" class="flex-1 md:flex-none px-6 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-bold text-center transition-all border border-white/10">
                            Lihat Aplikasi
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- 3. MAIN CONTENT -->
        <div class="container mx-auto px-5 xl:px-0 grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left Column: Description & Gallery -->
            <div class="lg:col-span-8 space-y-10">
                <!-- Description -->
                <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                    <h3 class="text-xl font-bold text-white mb-4 flex items-center gap-2 tracking-wide">
                        <span class="text-purple-400">#</span> Deskripsi Pekerjaan
                    </h3>
                    <div class="prose prose-invert max-w-none text-gray-300 leading-relaxed font-light text-justify">
                        {!! nl2br(e($experience->deskripsi)) !!}
                    </div>
                </div>

                <!-- Achievements Section -->
                @if($experience->pencapaian)
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                            <span class="text-green-400">#</span> Pencapaian Utama
                        </h3>
                        <div class="prose prose-invert max-w-none text-gray-300 text-justify">
                            {!! nl2br(e($experience->pencapaian)) !!}
                        </div>
                    </div>
                @endif

                <!-- Gallery Section -->
                @php
                    $images = is_string($experience->gambar) ? json_decode($experience->gambar) : $experience->gambar;
                @endphp
                @if($images && count($images) > 0)
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                            <span class="text-pink-400">#</span> Dokumentasi Proyek
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach($images as $img)
                                <div class="rounded-2xl overflow-hidden border border-white/10 group cursor-pointer aspect-video bg-[#1a103c]">
                                    <img src="{{ asset('storage/' . $img) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Documentation">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right Column: Sidebar Stats -->
            <div class="lg:col-span-4 space-y-8">
                <!-- Employment Info -->
                <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                    <h3 class="text-lg font-bold text-white mb-6">Informasi Detail</h3>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 flex-shrink-0">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Periode</p>
                                <p class="text-white text-sm">
                                    {{ \Carbon\Carbon::parse($experience->tanggal_mulai)->format('F Y') }} - 
                                    {{ $experience->tanggal_selesai ? \Carbon\Carbon::parse($experience->tanggal_selesai)->format('F Y') : 'Saat Ini' }}
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-400 flex-shrink-0">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Jabatan</p>
                                <p class="text-white text-sm">{{ $experience->posisi }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-pink-500/10 flex items-center justify-center text-pink-400 flex-shrink-0">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold tracking-wider mb-1">Tipe Pekerjaan</p>
                                <p class="text-white text-sm">{{ $experience->tipe_pekerjaan }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Technologies Used -->
                @php
                    $tools = is_string($experience->teknologi) ? json_decode($experience->teknologi) : $experience->teknologi;
                @endphp
                @if($tools && count($tools) > 0)
                    <div class="bg-[#150b2e]/50 backdrop-blur-sm border border-white/5 rounded-3xl p-6 md:p-8">
                        <h3 class="text-lg font-bold text-white mb-6 uppercase tracking-wider text-xs text-gray-500">Teknologi Terkait</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($tools as $tool)
                                <span class="px-3 py-1.5 rounded-lg bg-white/5 border border-white/5 text-xs text-purple-300 hover:border-purple-500/50 transition-colors">
                                    {{ $tool }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @else
        <!-- 404 State -->
        <div class="container mx-auto px-5 text-center pt-40">
            <h2 class="text-4xl font-bold mb-4">Pengalaman Tidak Ditemukan</h2>
            <p class="text-gray-400 mb-8">Maaf, detail pengalaman yang Anda cari tidak tersedia.</p>
            <a href="{{ route('user.experience') }}" wire:navigate class="px-8 py-3 rounded-xl border-2 border-red-500 bg-red-500/10 text-red-500 font-bold hover:bg-red-500/20 transition-all inline-block shadow-lg shadow-red-500/20">
                Kembali ke Daftar
            </a>
        </div>
    @endif

    <!-- Floating Back Button -->
    <a href="{{ route('user.experience') }}" wire:navigate class="fixed bottom-8 right-8 z-[100] px-6 py-3 rounded-2xl border-2 border-red-500 bg-[#0a0118]/80 backdrop-blur-xl text-red-500 hover:bg-red-500 hover:text-white transition-all duration-300 flex items-center gap-3 font-bold shadow-[0_0_30px_rgba(239,68,68,0.3)] hover:shadow-[0_0_50px_rgba(239,68,68,0.5)] group transform hover:-translate-y-2">
        <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform duration-300"></i>
        <span>Kembali ke Daftar</span>
    </a>
</div>

