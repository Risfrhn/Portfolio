<div>
    <div class="w-full mt-5 relative min-h-[80vh] flex flex-col items-center justify-center overflow-hidden">
        {{-- Background Effects match other pages --}}
        <div class="absolute z-0 w-[300px] h-[300px] md:w-[400px] md:h-[400px] rounded-full bg-gradient-to-r from-purple-500 via-pink-500 to-blue-500 opacity-20 animate-flare blur-[120px] top-[50px] left-[-100px]"></div>
        <div class="hidden md:block absolute z-0 w-[300px] h-[300px] rounded-full bg-gradient-to-r from-pink-400 via-yellow-400 to-red-400 opacity-20 animate-flare-slow blur-[150px] bottom-[50px] right-[0px]"></div>

        <div class="relative z-10 text-center px-4">
            <div class="mb-8 relative inline-block">
                {{-- Icon with glow effect --}}
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-blue-600 blur-xl opacity-50 rounded-full"></div>
                <div class="relative bg-[#0b0b14] p-6 rounded-full border border-gray-800 shadow-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>

            <h1 class="text-4xl md:text-6xl font-bold mb-4 bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">
                Under Construction
            </h1>
            
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed mb-8">
                Halaman pengaturan sedang dalam tahap pengembangan. Fitur ini akan segera tersedia untuk mengelola konfigurasi aplikasi Anda.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('dashboard-admin') }}" class="group relative inline-flex items-center justify-center px-8 py-3 text-sm font-medium text-white transition-all duration-300 bg-[#0b0b14] rounded-full hover:bg-gray-900 border border-gray-800 hover:border-purple-500/50 shadow-lg hover:shadow-purple-500/20">
                    <span class="absolute inset-0 w-full h-full rounded-full opacity-0 group-hover:opacity-100 bg-gradient-to-r from-purple-600/20 to-blue-600/20 blur transition-opacity duration-300"></span>
                    <span class="relative flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Kembali ke Dashboard
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
