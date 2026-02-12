<a href="{{$link}}">
    <!-- card -->
    <div class="relative w-[300px] rounded-md bg-black overflow-hidden hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300">
        <div class="relative w-full rounded-md">
            <img src="{{$image && $image != '#' ? $image : asset('Image.png')}}" alt="" class="w-full h-[200px] rounded-md object-cover">
            <div class="absolute -inset-1 bg-gradient-to-b from-transparent via-transparent to-black rounded-md"></div>
        </div>
        
        <div class="flex flex-col gap-5 pt-5 px-5 pb-10">
            <div class="flex flex-wrap gap-5">
                <p class="text-md font-semibold text-white">{{ $name }}</p>
                <div class="py-1 px-6 text-black rounded-full text-[11px] ml-auto bg-white font-semibold">{{$type}}</div>
            </div>
            
            <p class="text-sm text-white truncate">{{ $desc }}</p>
        </div>

        <!-- Dots -->
        <!--
        <div class="absolute top-[400px] right-[50px] xl:top-[450px] xl:right-[50px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 group-hover:-translate-y-5"></div>
        <div class="absolute top-[410px] right-[100px] xl:top-[450px] xl:right-[100px] w-2 h-2 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-100 group-hover:-translate-y-6"></div>
        <div class="absolute top-[390px] right-[210px] xl:top-[460px] xl:right-[210px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-200 group-hover:-translate-y-7"></div>
        <div class="absolute top-[400px] right-[250px] xl:top-[470px] xl:right-[250px] w-2 h-2 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-300 group-hover:-translate-y-8"></div>
        <div class="absolute top-[400px] right-[170px] xl:top-[470px] xl:right-[170px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-450 group-hover:-translate-y-9"></div>
        <div class="absolute top-[400px] right-[220px] xl:top-[450px] xl:right-[220px] w-2 h-2 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-500 group-hover:-translate-y-7"></div>
        <div class="absolute top-[400px] right-[120px] xl:top-[440px] xl:right-[120px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-600 group-hover:-translate-y-8"></div> -->
    </div>
</a>
