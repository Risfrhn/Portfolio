<div>
    <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-[#0b0b14] text-white w-full max-w-7xl rounded-2xl relative h-[90vh] flex flex-col shadow-2xl border border-white/10 overflow-hidden">
            
            {{-- Sticky Header --}}
            <div class="flex-none flex items-center justify-between px-6 py-4 border-b border-white/10 bg-[#0b0b14] z-10">
                <h2 class="text-xl md:text-2xl font-bold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">
                    Preview Landing User
                </h2>
                <button wire:click="closeLandingPreview" 
                        class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-red-500 border border-red-500/50 rounded-full hover:bg-red-500 hover:text-white transition-all duration-300 shadow-[0_0_10px_rgba(239,68,68,0.2)] hover:shadow-[0_0_20px_rgba(239,68,68,0.6)]">
                    <span>Close Preview</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Scrollable Content --}}
            <div class="flex-1 overflow-y-auto p-0 scrollbar-thin scrollbar-thumb-gray-700 scrollbar-track-transparent">
                <div class="w-full h-full">
                    <livewire:page.user.landing-page />
                </div>
            </div>
        </div>
    </div>
</div>
