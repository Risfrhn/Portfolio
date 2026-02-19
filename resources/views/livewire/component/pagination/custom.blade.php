@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center gap-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/5 border border-white/5 text-gray-600 cursor-not-allowed">
                <i class="fas fa-chevron-left text-xs"></i>
            </span>
        @else
            <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#150b2e] border border-white/10 text-gray-400 hover:text-white hover:border-purple-500/50 hover:shadow-[0_0_15px_rgba(168,85,247,0.3)] transition-all duration-300">
                <i class="fas fa-chevron-left text-xs"></i>
            </button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                {{-- <span class="relative inline-flex items-center justify-center w-10 h-10 text-gray-500">
                    {{ $element }}
                </span> --}}
                {{-- Hiding dots to strictly follow "max 3 kotak" request if possible, 
                     but standard Laravel logic might force dots. 
                     The user asked for: 1 2 3 -> 2 3 4. 
                     If we define onEachSide(1), we get 3 central items. 
                     We might strictly filter the array if needed, but let's try standard elements first with onEachSide(1). 
                --}}
                 <span class="relative inline-flex items-center justify-center w-10 h-10 text-gray-500">...</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span class="relative inline-flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold shadow-[0_0_15px_rgba(168,85,247,0.5)] border border-transparent">
                                {{ $page }}
                            </span>
                        </span>
                    @else
                        {{-- Only show if within specific range to emulate "max 3" accurately if default UrlWindow is too broad --}}
                       
                        <button wire:click="gotoPage({{ $page }})" class="relative inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#150b2e] border border-white/10 text-gray-400 hover:text-white hover:border-purple-500/50 hover:shadow-[0_0_15px_rgba(168,85,247,0.3)] transition-all duration-300">
                            {{ $page }}
                        </button>
                       
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#150b2e] border border-white/10 text-gray-400 hover:text-white hover:border-purple-500/50 hover:shadow-[0_0_15px_rgba(168,85,247,0.3)] transition-all duration-300">
                <i class="fas fa-chevron-right text-xs"></i>
            </button>
        @else
            <span class="relative inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/5 border border-white/5 text-gray-600 cursor-not-allowed">
                <i class="fas fa-chevron-right text-xs"></i>
            </span>
        @endif
    </nav>
@endif
