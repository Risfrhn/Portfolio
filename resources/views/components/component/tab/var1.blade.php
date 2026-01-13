<div id="accordion-{{ $id }}" x-data="{ isOpen: false }" class="mb-3">
    <h2 id="accordion-card-heading-{{ $id }}">
        <button 
            type="button" 
            @click="isOpen = !isOpen"
            class="mx-auto w-full bg-[#a78bfa]/10 py-5 px-5 transition-shadow duration-300"
            :class="isOpen ? 'rounded-t-lg rounded-b-0 shadow-lg' : 'rounded-lg'"
        >
            <div class="flex flex-nowrap gap-5">
                <!-- ICON -->
                <div class="py-1 px-3 md:py-3 md:px-3 rounded-xl bg-transparent border-2 border-[#a78bfa] inline-flex items-center justify-center hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300">
                    <i class="{{ $icon }} text-[#a78bfa] text-xl"></i>
                </div>

                <!-- TITLE & DESC -->
                <div class="grid grid-cols-12 text-left">
                    <div class="col-span-12">
                        <p class="text-xl md:text-sm xl:text-xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent"
                           style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">
                           {{ $title }}
                        </p>
                    </div>
                    <div class="col-span-12">
                        <p class="text-gray-500 text-sm md:text-[11px] lg:text-md">{{ $desc }}</p>
                    </div>
                </div>
            </div>
        </button>
    </h2>

    <!-- ACCORDION BODY -->
    <div 
        class="mx-auto w-full bg-[#a78bfa]/10 px-5 flex flex-wrap items-start gap-x-3 gap-y-1 overflow-hidden transition-all duration-300"
        :style="isOpen ? 'max-height: 24rem; opacity: 1; padding-top: 1rem; padding-bottom: 1rem;' : 'max-height: 0; opacity: 0; padding-top: 0; padding-bottom: 0;'"
    >
        @foreach($children as $child)
            <x-component.icon.var2 
                :levels="$child['levels']" 
                :nameTool="$child['nameTool']" 
                :image="$child['image']"
            />
        @endforeach
    </div>
</div>
