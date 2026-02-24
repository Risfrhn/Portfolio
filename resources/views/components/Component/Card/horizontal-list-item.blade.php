<div class="col-span-12 lg:col-span-6">
    <!-- Horizontal Card - Deep Purple Theme -->
    <div class="relative w-full h-full rounded-2xl bg-[#150b2e] border border-white/5 p-5 transition-all duration-500 hover:border-purple-500/50 hover:shadow-[0_0_30px_rgba(139,92,246,0.4)] hover:-translate-y-1 group overflow-hidden">
        
        <!-- Glow Effect on Hover -->
        <div class="absolute -right-10 -top-10 w-32 h-32 bg-purple-600/20 blur-[50px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>

        <div class="relative flex gap-5 z-10">
            <!-- Image Container (Fixed Size) -->
            <div class="relative shrink-0 w-28 h-28 sm:w-32 sm:h-32 rounded-xl overflow-hidden border border-white/10 group-hover:border-purple-500/30 transition-colors duration-300">
                <img src="{{$image}}" alt="{{ $name }}" class="w-full h-full object-cover transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-[#150b2e]/60 to-transparent"></div>
            </div>

            <!-- Content (Strictly Aligned Height) -->
            <div class="flex-1 min-w-0 flex flex-col justify-between h-28 sm:h-32 py-1">
                <div>
                     <!-- Category Badge -->
                     <span class="inline-block px-2 py-0.5 rounded text-[9px] font-bold uppercase tracking-wider bg-purple-900/40 text-purple-300 border border-purple-500/20 mb-1">
                        {{ $type }}
                    </span>
                    
                    <h4 class="text-base sm:text-lg font-bold text-white leading-tight group-hover:text-purple-400 transition-colors duration-300 truncate">
                        {{ $name }}
                    </h4>
                    <p class="text-[10px] sm:text-xs text-gray-400 mt-1 line-clamp-2 leading-relaxed group-hover:text-gray-300 transition-colors">
                        {{ $desc }}
                    </p>
                </div>
                
                <!-- Actions (Aligned to bottom of image) -->
                <div class="flex items-center">
                    <a href="{{$link}}" class="text-xs font-bold text-purple-400 opacity-0 transform translate-x-[-10px] transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0 flex items-center gap-2">
                        View Detail <i class="fas fa-arrow-right animate-pulse"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
