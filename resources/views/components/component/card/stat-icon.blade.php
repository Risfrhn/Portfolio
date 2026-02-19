<div class="relative w-full sm:w-[300px] h-[280px] rounded-2xl bg-[#150b2e] border border-white/5 p-6 text-center group transition-all duration-500 hover:border-purple-500/50 hover:shadow-[0_0_30px_rgba(139,92,246,0.3)] hover:-translate-y-2 overflow-hidden">
    
    <!-- Background Glow -->
    <div class="absolute -right-10 -top-10 w-32 h-32 bg-purple-600/10 blur-[50px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

    <div class="relative z-10 flex flex-col h-full items-center justify-center">
        <!-- Icon -->
        <div class="mb-6 p-4 rounded-xl bg-purple-900/40 border border-purple-500/30 text-[#a78bfa] group-hover:text-white group-hover:scale-110 group-hover:bg-purple-600 group-hover:border-purple-400 group-hover:shadow-[0_0_20px_rgba(168,85,247,0.6)] transition-all duration-300 shadow-lg shadow-purple-900/20">
            <i class="{{$icon}} text-4xl"></i>
        </div>

        <p class="text-white text-xl font-bold mb-3 group-hover:text-purple-300 transition-colors">{{ $name }}</p>
        <p class="text-gray-400 text-sm leading-relaxed group-hover:text-gray-200 transition-colors">{{ $desc }}</p>
    </div>

    <!-- Decorative Elements (Simplified) -->
    <i class="absolute z-0 bottom-[-10px] right-[-10px] fas fa-code text-[#a78bfa] text-[60px] opacity-5 rotate-[-10deg] group-hover:opacity-10 transition-opacity duration-300"></i>
</div>