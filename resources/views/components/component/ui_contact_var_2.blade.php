<a href="{{$link}}" class="py-3 px-5 rounded-xl bg-transparent border-2 inline-flex items-center justify-center gap-2 hover:shadow-[0_0_20px_rgba(130,90,250,0.4)] transition-shadow duration-300" style=" border-color: {{$bgColor}}">
    <i :class="{{$icon}} text-xl" style="color: {{$bgColor}}"></i>
    <span class="font-medium" style="color: {{$bgColor}}">{{ $name }}</span>
</a>