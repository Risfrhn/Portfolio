<div>
    @if($href)
        <!-- Link -->
        <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center p-0.5 text-sm font-medium tracking-wide text-white transition duration-300 rounded-full shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]']) }}>
            <span class="relative px-3 lg:px-5 py-2 lg:py-2.5 transition-all ease-in duration-75 bg-[#0b0b14] rounded-full group-hover:bg-transparent group-hover:dark:bg-transparent">
                {{ $label }}
            </span>
        </a>
    @else
        <!-- Button -->
        <button type="{{ $submit ? 'submit' : 'button' }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center p-0.5 text-sm font-medium tracking-wide text-white transition duration-300 rounded-full shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]']) }}>
            <span class="relative px-3 lg:px-5 py-2 lg:py-2.5 transition-all ease-in duration-75 bg-[#0b0b14] rounded-full group-hover:bg-transparent group-hover:dark:bg-transparent">
                {{ $label }}
            </span>
        </button>
    @endif
</div>
