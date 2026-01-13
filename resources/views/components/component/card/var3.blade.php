<div class="col-span-12 lg:col-span-6 mx-2 bg-black/20">
    <div class="relative w-full border-2 rounded-xl border-[#a78bfa] px-3 py-3 overflow-hidden hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300">
        <div class="flex items-center gap-2 md:gap-5">
            <img src="{{$image}}" alt="" class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-md md:rounded-xl">

            <div class="flex-1 min-w-0 flex items-center gap-1 md:gap-3">
                <div class="flex-1 min-w-0">
                    <p class="text-sm md:text-md font-semibold text-white">{{ $name }}</p>
                    <p class="text-xs md:text-sm text-white truncate">{{ $desc }}</p>
                </div>
                <x-component.button.var1 label="Detail" href="{{$link}}"/>
                <x-component.button.var1 label="Pembelian" action="{{$func}}"/>
            </div>
        </div>
    </div>
</div>