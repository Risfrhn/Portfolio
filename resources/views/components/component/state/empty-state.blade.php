@props([
    'icon' => 'fas fa-ghost',
    'title' => 'Tidak ada data ditemukan',
    'description' => 'Data yang Anda cari belum tersedia saat ini.',
    'actionLabel' => null,
    'actionWireClick' => null,
    'actionLink' => null,
])

<div {{ $attributes->merge(['class' => 'col-span-full text-center py-20']) }}>
    <div class="inline-block p-6 rounded-full bg-white/5 mb-4 animate-pulse">
        <i class="{{ $icon }} text-4xl text-gray-500"></i>
    </div>
    <h3 class="text-xl font-bold text-gray-300 mb-2">{{ $title }}</h3>
    <p class="text-gray-500 max-w-md mx-auto text-sm md:text-base">{{ $description }}</p>
    
    @if($actionLabel)
        <div class="mt-6">
            @if($actionWireClick)
                <button wire:click="{{ $actionWireClick }}" class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-purple-600/20 text-purple-400 border border-purple-500/30 hover:bg-purple-600/30 hover:text-purple-300 hover:border-purple-500/50 transition-all duration-300 text-sm font-semibold">
                    <span>{{ $actionLabel }}</span>
                    <i class="fas fa-arrow-right text-xs"></i>
                </button>
            @elseif($actionLink)
                <a href="{{ $actionLink }}" wire:navigate class="inline-flex items-center gap-2 px-6 py-2 rounded-full bg-purple-600/20 text-purple-400 border border-purple-500/30 hover:bg-purple-600/30 hover:text-purple-300 hover:border-purple-500/50 transition-all duration-300 text-sm font-semibold">
                    <span>{{ $actionLabel }}</span>
                    <i class="fas fa-arrow-right text-xs"></i>
                </a>
            @endif
        </div>
    @endif
</div>
