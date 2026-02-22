<a href="{{$link}}" class="group relative block w-full sm:w-[320px] md:w-[350px]">
    <!-- card -->                                                                        <!-- Dark Deep Purple BG -->
    <div class="relative h-full overflow-hidden rounded-2xl bg-[#150b2e] border border-white/5 shadow-lg transition-all duration-500 group-hover:shadow-[0_0_30px_rgba(139,92,246,0.5)] group-hover:border-purple-500/50 group-hover:-translate-y-2">
        
        <!-- Image Container -->
        <div class="relative h-64 w-full overflow-hidden">
            <!-- Gradient matching the card background -->
            <div class="absolute inset-x-0 bottom-0 z-10 h-3/4 bg-gradient-to-t from-[#150b2e] via-[#150b2e]/90 to-transparent opacity-100"></div>
            
            <img src="{{$image && $image != '#' ? $image : asset('Image.png')}}" 
                 alt="{{ $name }}" 
                 class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
            
            <!-- Type Badge -->
            <div class="absolute top-4 right-4 z-20">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-purple-900/50 text-purple-200 backdrop-blur-md border border-purple-500/20 shadow-sm">
                    {{$type}}
                </span>
            </div>
        </div>
        
        <!-- Content -->
        <div class="relative z-20 -mt-20 p-6 pt-0">
            <!-- Text Container with Slide Animation -->
            <div class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                <h3 class="mb-1 text-xl font-bold text-white leading-tight drop-shadow-md group-hover:text-purple-400 transition-colors duration-300 line-clamp-1">
                    {{ $name }}
                </h3>
                
                <p class="text-sm text-gray-400 leading-relaxed line-clamp-2 mb-4 group-hover:text-gray-300 transition-colors duration-300">
                    {{ $desc }}
                </p>
            </div>

            <div class="absolute bottom-6 left-6 flex items-center text-xs font-bold text-purple-400 opacity-0 transform translate-y-4 transition-all duration-300 group-hover:opacity-100 group-hover:translate-y-0">
                Lihat Detail <i class="fas fa-arrow-right ml-2 animate-pulse"></i>
            </div>
        </div>
    </div>
</a>
