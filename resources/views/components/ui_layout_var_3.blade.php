<div class="w-full h-[2px] mt-[40px] md:mt-[100px] bg-gradient-to-r from-transparent via-fuchsia-500 to-transparent" style="filter: drop-shadow(0 0 6px rgba(168,85,247,0.8));"></div>
    <div id="ContactSection" class="relative mt-24 mb-40 mx-3">
        <div class="grid grid-cols-12 my-24 gap-4 z-10">
            <div class="col-span-12">
                <p class="text-3xl text-center lg:text-5xl lg:my-2 font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">{{$header}}</p>
            </div>
            <div class="col-span-12">
                <p class="text-gray-500 text-center mt-1">{{$subHeader}}</p>
            </div>
            <div class="col-span-12">
                <div class="grid grid-cols-12 my-10 h-full gap-4 z-10">
                    <div class="col-span-12 md:col-span-6 h-full bg-[#a78bfa]/10 rounded-xl pt-10 px-5">
                        <div class="col-span-12">
                            <p class="text-3xl text-center lg:text-5xl lg:my-2 font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">{{$headerBox1}}</p>
                        </div>
                        <div class="col-span-12">
                            <p class="text-gray-500 text-center mt-1">{{$descSubHeaderBox1}}</p>
                        </div>
                        @isset($slot1)
                            {{$slot1}}
                        @endisset
                    </div>
                    <div class="col-span-12 md:col-span-6 h-full bg-[#a78bfa]/10  rounded-xl pt-10 px-5">
                        <div class="col-span-12">
                            <p class="text-3xl text-center lg:text-5xl lg:my-2 font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent" style="filter: drop-shadow(0 0 18px rgba(168, 85, 247, 0.9));">{{$headerBox2}}</p>
                        </div>
                        <div class="col-span-12 mb-10">
                            <p class="text-gray-500 text-center mt-1">{{$descSubHeaderBox1}}</p>
                        </div>
                        <div class="flex flex-wrap gap-3 place-content-center">
                            @isset($slot2)
                                {{$slot2}}
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>