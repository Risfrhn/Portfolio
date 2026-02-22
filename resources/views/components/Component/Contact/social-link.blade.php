<a href="{{$link}}" target="_blank" 
   class="group relative py-3 px-6 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center gap-3 overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-lg"
   style="--hover-color: {{$bgColor}}">
    <!-- Hover Background (fills on hover) -->
    <div class="absolute inset-0 bg-[var(--hover-color)] opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
    
    <!-- Hover Border Glow -->
    <div class="absolute inset-0 border border-[var(--hover-color)] opacity-0 group-hover:opacity-100 rounded-xl transition-opacity duration-300"></div>

    <div class="w-10 h-10 rounded-lg bg-white/10 border border-white/10 flex items-center justify-center group-hover:bg-white/20 transition-all duration-300 shadow-inner">
        <i class="{{$icon}} text-xl transition-colors duration-300 group-hover:text-white" style="color: {{$bgColor}};"></i>
    </div>
    <span class="font-medium text-gray-300 group-hover:text-white relative z-10 transition-colors duration-300">{{ $name }}</span>
</a>
