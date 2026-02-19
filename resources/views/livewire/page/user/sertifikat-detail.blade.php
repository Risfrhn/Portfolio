<div class="min-h-screen pt-24 pb-20 flex items-center justify-center">
    <!-- DYNAMIC BACKGROUND (TS Particles Plugin) -->
    <div id="tsparticles" class="fixed inset-0 z-[-1] pointer-events-none"></div>

    @if($sertifikat)
        <div class="container mx-auto px-5 xl:px-0 max-w-4xl">

            <div class="bg-[#150b2e] border border-white/10 rounded-3xl overflow-hidden shadow-2xl relative">
                <!-- Decorative Glow -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-purple-600/20 blur-[80px] rounded-full pointer-events-none"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Image Side -->
                    <div class="relative bg-black/20 p-8 flex items-center justify-center border-b md:border-b-0 md:border-r border-white/10">
                        <div class="relative w-full aspect-[4/3] rounded-xl overflow-hidden border border-white/20 shadow-lg group">
                            @if($sertifikat->gambar_sertifikat)
                                <img src="{{ asset('storage/' . $sertifikat->gambar_sertifikat) }}" class="w-full h-full object-cover" alt="{{ $sertifikat->judul }}">
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-purple-900 to-[#150b2e] flex items-center justify-center">
                                    <i class="fas fa-certificate text-5xl text-purple-500 opacity-30"></i>
                                </div>
                            @endif

                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <a href="{{ $sertifikat->gambar_sertifikat ? asset('storage/' . $sertifikat->gambar_sertifikat) : '#' }}" target="_blank" class="px-4 py-2 bg-white/10 backdrop-blur-md rounded-full text-white hover:bg-white/20 transition">
                                    <i class="fas fa-expand mr-2"></i> Lihat Penuh
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Details Side -->
                    <div class="p-8 md:p-12 flex flex-col justify-center">
                        <div class="mb-6">
                            <span class="inline-block px-3 py-1 rounded bg-green-500/20 text-green-400 text-xs font-bold border border-green-500/30 uppercase tracking-wider">
                                Terverifikasi
                            </span>
                        </div>

                        <h1 class="text-2xl md:text-3xl font-bold text-white mb-4 leading-snug">
                            {{ $sertifikat->judul }}
                        </h1>

                        <div class="space-y-6 mb-8">
                            <div>
                                <h3 class="text-gray-500 text-xs uppercase tracking-widest font-bold mb-1">Diterbitkan Oleh</h3>
                                <p class="text-lg text-purple-300 font-medium flex items-center gap-2">
                                    <i class="fas fa-certificate"></i> {{ $sertifikat->nama_institusi }}
                                </p>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <h3 class="text-gray-500 text-xs uppercase tracking-widest font-bold mb-1">Tanggal Terbit</h3>
                                    <p class="text-white text-sm md:text-base">{{ \Carbon\Carbon::parse($sertifikat->tanggal_terbit)->format('d M Y') }}</p>
                                </div>
                                <div>
                                    <h3 class="text-gray-500 text-xs uppercase tracking-widest font-bold mb-1">Berlaku Hingga</h3>
                                    <p class="text-white text-sm md:text-base">{{ $sertifikat->tanggal_berlaku ? \Carbon\Carbon::parse($sertifikat->tanggal_berlaku)->format('d M Y') : 'Seumur Hidup' }}</p>
                                </div>
                            </div>
                            
                            <div>
                                 <h3 class="text-gray-500 text-xs uppercase tracking-widest font-bold mb-1">Nomor Sertifikat</h3>
                                 <p class="text-white font-mono bg-white/5 p-2 rounded border border-white/5 select-all overflow-hidden text-ellipsis">{{ $sertifikat->nomor_sertifikat }}</p>
                            </div>
                        </div>

                        @if($sertifikat->file_sertifikat)
                            <a href="{{ asset('storage/' . $sertifikat->file_sertifikat) }}" target="_blank" class="w-full py-4 rounded-xl bg-gradient-to-r from-purple-600 to-blue-600 text-white font-bold text-center hover:shadow-[0_0_20px_rgba(139,92,246,0.4)] transition-all transform hover:-translate-y-1">
                                <i class="fas fa-download mr-2"></i> Unduh Dokumen Asli
                            </a>
                        @else
                             <button disabled class="w-full py-4 rounded-xl bg-gray-700 text-gray-400 font-bold text-center cursor-not-allowed">
                                <i class="fas fa-lock mr-2"></i> Dokumen Tidak Tersedia
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        </div>
    @endif

    <!-- Floating Back Button -->
    <a href="{{ route('user.sertifikat') }}" wire:navigate class="fixed bottom-8 right-8 z-[100] px-6 py-3 rounded-2xl border-2 border-red-500 bg-[#150b2e]/80 backdrop-blur-xl text-red-500 hover:bg-red-500 hover:text-white transition-all duration-300 flex items-center gap-3 font-bold shadow-[0_0_30px_rgba(239,68,68,0.3)] hover:shadow-[0_0_50px_rgba(239,68,68,0.5)] group transform hover:-translate-y-2">
        <i class="fas fa-arrow-left group-hover:-translate-x-2 transition-transform duration-300"></i>
        <span>Kembali ke Sertifikat</span>
    </a>
</div>

