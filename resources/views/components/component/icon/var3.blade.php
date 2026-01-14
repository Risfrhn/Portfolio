<div class="relative group inline-flex items-center justify-center">
    <div class="p-0.5 text-sm font-medium tracking-wide transition duration-300 rounded-full shadow-lg bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] cursor-default">
        <span class="flex flex-col items-center justify-center px-2 py-2 transition-all ease-in duration-75 bg-[#0b0b14] rounded-full">
            <div class="flex flex-row">
                <p class="text-xs font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">
                    {{ nameTool }}
                </p>
                {{$slot}}
            </div>
        </span>
    </div>
</div>