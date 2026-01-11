<a href="{{$link}}">
    <!-- card -->
    <div class="relative w-[300px] h-[430px] xl:w-[400px] xl:h-[500px] border-2 rounded-xl border-[#a78bfa] px-3 py-3 group overflow-hidden hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300">
        <img src="{{$image}}" alt="" class="w-[280px] h-[240px] xl:w-[480px] xl:h-[300px] rounded-xl">
        
        <div class="flex flex-wrap gap-5 py-5">
            <p class="text-md font-semibold text-white">{{ $name }}</p>
            <div class="py-1 px-6 text-black rounded-full text-[11px] ml-auto bg-white font-semibold">{{$type}}</div>
        </div>
        
        <p class="text-sm text-white truncate">{{ $desc }}</p>

        <!-- Dots -->
        <div class="absolute top-[400px] right-[50px] xl:top-[450px] xl:right-[50px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 group-hover:-translate-y-5"></div>
        <div class="absolute top-[410px] right-[100px] xl:top-[450px] xl:right-[100px] w-2 h-2 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-100 group-hover:-translate-y-6"></div>
        <div class="absolute top-[390px] right-[210px] xl:top-[460px] xl:right-[210px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-200 group-hover:-translate-y-7"></div>
        <div class="absolute top-[400px] right-[250px] xl:top-[470px] xl:right-[250px] w-2 h-2 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-300 group-hover:-translate-y-8"></div>
        <div class="absolute top-[400px] right-[170px] xl:top-[470px] xl:right-[170px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-450 group-hover:-translate-y-9"></div>
        <div class="absolute top-[400px] right-[220px] xl:top-[450px] xl:right-[220px] w-2 h-2 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-500 group-hover:-translate-y-7"></div>
        <div class="absolute top-[400px] right-[120px] xl:top-[440px] xl:right-[120px] w-1 h-1 rounded-full bg-[#a78bfa] opacity-50 transition-transform duration-500 delay-600 group-hover:-translate-y-8"></div>
    </div>
</a>
