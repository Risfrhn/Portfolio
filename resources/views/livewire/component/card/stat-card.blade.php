<div class="w-full bg-[#1D1D29] rounded-md backdrop-blur-sm">
    <div class="flex flex-col mx-5 my-5">
        <div class="flex flex-row">
            <div class="rounded-full bg-[#12121E] w-14 h-14 me-auto flex items-center justify-center ">
                <i class="{{$icon}} text-2xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent"></i>
            </div>
            <p class="text-6xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">{{ $count }}</p>
        </div>
        
        <p class="text-xl font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">{{ $text }}</p>
    </div>
</div>