<div id="accordion-{{ $id }}" x-data="{ isOpen: false }" class="mb-4">
    <h2 id="accordion-card-heading-{{ $id }}">
        <button 
            type="button" 
            @click="isOpen = !isOpen"
            class="w-full relative overflow-hidden rounded-xl border border-white/5 bg-[#150b2e] p-1 transition-all duration-300 hover:border-purple-500/30 hover:shadow-[0_0_20px_rgba(139,92,246,0.15)] group"
            :class="isOpen ? 'border-purple-500/50 shadow-[0_0_20px_rgba(139,92,246,0.2)]' : ''"
        >
            <!-- Hover Glow -->
            <div class="absolute -right-10 -top-10 w-20 h-20 bg-purple-600/20 blur-[30px] rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

            <div class="relative flex items-center p-4 gap-4 z-10">
                <!-- ICON -->
                <div class="flex-shrink-0 w-12 h-12 rounded-lg bg-purple-900/20 border border-purple-500/20 flex items-center justify-center text-[#a78bfa] group-hover:text-white group-hover:bg-purple-600 group-hover:border-purple-400 transition-all duration-300"
                     :class="isOpen ? 'bg-purple-600 text-white border-purple-400' : ''">
                    <i class="{{ $icon }} text-xl"></i>
                </div>

                <!-- TITLE & DESC -->
                <div class="flex-1 text-left">
                    <p class="text-lg font-bold text-white group-hover:text-purple-300 transition-colors" :class="isOpen ? 'text-purple-300' : ''">
                        {{ $title }}
                    </p>
                    <p class="text-gray-400 text-xs mt-1 group-hover:text-gray-300 transition-colors">{{ $desc }}</p>
                </div>

                <!-- Arrow Indicator -->
                <div class="text-gray-500 transition-transform duration-300" :class="isOpen ? 'rotate-180 text-purple-400' : ''">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </button>
    </h2>

    <!-- ACCORDION BODY -->
    <div 
        class="w-full overflow-hidden transition-all duration-500 ease-in-out"
        x-ref="container"
        x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px; opacity: 1; margin-top: 0.5rem;' : 'max-height: 0; opacity: 0; margin-top: 0;'"
    >
        <div class="p-4 rounded-xl bg-[#150b2e]/50 border border-white/5 flex flex-wrap gap-4">
            @foreach($children as $child)
                <div class="flex-auto md:flex-initial">
                    <x-component.icon.skill-badge 
                    image="{{$child['image']}}" 
                    nameTool="{{$child['nameTool']}}" 
                    levels="{{$child['levels']}}" 
                    />
                </div>
            @endforeach
        </div>
    </div>
</div>
