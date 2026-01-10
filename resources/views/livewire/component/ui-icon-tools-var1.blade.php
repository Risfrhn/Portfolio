<div class="relative group inline-flex items-center justify-center">
    <!-- ICON WRAPPER -->
    <div class="p-0.5 text-sm font-medium tracking-wide transition duration-300 rounded-xl shadow-lg  bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] cursor-default">
        <span class="flex flex-col items-center justify-center w-24 h-24 transition-all ease-in duration-75 bg-[#0b0b14] rounded-xl">
            <img src="{{$image}}" alt="Image not found" class="w-[40px] h-[40px] md:w-[50px] md:h-[50px] rounded-md md:rounded-xl" />
            <p class="mt-1 text-xs font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent"
                style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">
                {{ $nameTool }}
            </p>
        </span>
    </div>

    <!-- TOOLTIP -->
    <div class="absolute bottom-[40%]  left-1/2 -translate-x-1/2 w-44 px-3 py-2 rounded-lg bg-[#111427] text-gray-200 text-xs shadow-xl opacity-0 scale-95 pointer-events-none group-hover:opacity-100 group-hover:scale-100 transition-all duration-300 z-50">
        <p class="font-semibold text-sm">{{ $nameTool }}</p>

        <p class="mt-1 text-[11px] text-gray-400">
            Skill level: <span class="font-semibold text-purple-300">{{ $this->LabelLevel }}</span>
        </p>

        <div class="flex">
            <div class="w-full h-1.5 bg-gray-700 rounded mt-2 overflow-hidden">
                <div class="h-full bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600" style="width: {{$this->LevelBar}} }"></div>
            </div>
            <p class=" px-1 py-0.5 text-[10px] text-gray-400 ">{{ $this->level }}</p>
        </div>
    </div>
</div>