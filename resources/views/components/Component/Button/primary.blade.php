@props(['href' => null, 'label' => '', 'action' => null, 'submit' => false, 'solid' => false])

<div>
    @if($href)
        <!-- Link -->
        <a href="{{ $href }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center p-[2px] text-sm font-bold tracking-wide text-white transition duration-500 rounded-full shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 hover:shadow-[0_0_25px_rgba(168,85,247,0.5)] hover:scale-105 active:scale-95']) }}>
            <span class="block px-6 py-3 w-full rounded-full transition-all duration-300 {{ $solid ? 'bg-transparent' : 'bg-[#0b0b14] group-hover:bg-transparent' }}">
                {{ $label }}
            </span>
        </a>
    @else
        <!-- Button -->
        <button type="{{ $submit ? 'submit' : 'button' }}" {{ $attributes->merge(['class' => 'inline-flex items-center justify-center p-[2px] text-sm font-bold tracking-wide text-white transition duration-500 rounded-full shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-500 via-pink-500 to-orange-500 hover:shadow-[0_0_25px_rgba(168,85,247,0.5)] hover:scale-105 active:scale-95']) }}>
            <span class="block px-6 py-3 w-full rounded-full transition-all duration-300 {{ $solid ? 'bg-transparent' : 'bg-[#0b0b14] group-hover:bg-transparent' }}">
                {{ $label }}
            </span>
        </button>
    @endif
</div>
