<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center items-center gap-2 mt-5">
            {{-- Previous Page Link --}}
            <span>
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-[#1D1D29] border border-gray-700 cursor-default leading-5 rounded-md">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#1D1D29] border border-gray-700 leading-5 rounded-md hover:text-gray-300 focus:outline-none focus:ring ring-gray-300 active:bg-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.previous') !!}
                    </button>
                @endif
            </span>

            {{-- Manually calculated page range (max 3) --}}
            @php
                $start = $paginator->currentPage() - 1;
                if ($start < 1) {
                    $start = 1;
                }
                $end = $start + 2;
                if ($end > $paginator->lastPage()) {
                    $end = $paginator->lastPage();
                    $start = max(1, $end - 2);
                }
            @endphp

            <span class="hidden md:inline-flex relative z-0 gap-2">
                @foreach (range($start, $end) as $page)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page">
                            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-blue-500 border border-transparent cursor-default leading-5 rounded-md shadow-lg shadow-purple-500/30">
                                {{ $page }}
                            </span>
                        </span>
                    @else
                        <button wire:click="gotoPage({{ $page }})" aria-label="{{ __('Go to page :page', ['page' => $page]) }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-[#1D1D29] border border-gray-700 leading-5 rounded-md hover:text-white hover:bg-gray-700 focus:z-10 focus:outline-none focus:ring ring-gray-300 active:bg-gray-700 transition ease-in-out duration-150">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            </span>

            {{-- Next Page Link --}}
            <span>
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-[#1D1D29] border border-gray-700 leading-5 rounded-md hover:text-gray-300 focus:outline-none focus:ring ring-gray-300 active:bg-gray-700 transition ease-in-out duration-150">
                        {!! __('pagination.next') !!}
                    </button>
                @else
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-[#1D1D29] border border-gray-700 cursor-default leading-5 rounded-md">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
