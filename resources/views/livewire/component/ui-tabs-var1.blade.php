<div id="accordion-{{$id}}">
    <h2 id="accordion-card-heading-{{$id}}">
        <button wire:click="toggle" type="button" class="mx-auto w-full bg-[#a78bfa]/10 py-5 px-5 hover:bg-[#a78bfa]/20 hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300 {{$isOpen ? 'rounded-t-lg rounded-b-0' : 'rounded-lg'}}" data-accordion-target="#accordion-card-body-{{$id}}" aria-expanded="{{$isOpen ? 'false' : 'true'}}" aria-controls="accordion-card-body-{{$id}}">
            <div class="flex flex-nowrap gap-5">
                    <div href="#" class="py-1 px-2.5 md:py-3 md:px-3 rounded-xl bg-transparent border-2 border-[#a78bfa] inline-flex items-center justify-center hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300">
                        <i class="{{$icon}} text-[#a78bfa] text-xl"></i>
                    </div>
                    <div class="grid grid-cols-12 text-left">
                        <div class="col-span-12">
                            <p class="md:text-md lg:text-xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">{{ $title }}</p>
                        </div>
                        <div class="col-span-12">
                            <p class="text-gray-500 text-xs md:text-sm">{{$desc}}</p>
                        </div>
                    </div>
                </div>
        </button>
    </h2>
    @if($isOpen)
        <div 
            id="accordion-card-body-{{$id}}" 
            class="mx-auto w-full bg-[#a78bfa]/10 px-5 flex flex-wrap items-start gap-x-3 gap-y-1 transition-all duration-300 overflow-y-auto 
            @if($isOpen) 
                max-h-96 opacity-100 rounded-b-lg rounded-t-0 py-4
            @else 
                max-h-0 opacity-0 py-0
            @endif" 
            aria-labelledby="accordion-card-heading-{{$id}}"
        >
            @foreach($children as $child)
                <livewire:component.ui-icon-tools-var1 
                    :levels="$child['levels']" 
                    :nameTool="$child['nameTool']" 
                    :image="$child['image']"
                />
            @endforeach
        </div>
    @endif
</div>