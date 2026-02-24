<div>
    @if (session()->has('success'))
        <div class="mb-4 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-green-400 text-sm flex items-center gap-2">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
        </div>
    @endif

    <form class="flex flex-col gap-4">
        <div class="relative group">
            <input wire:model="nama" type="text" placeholder="Nama Anda" class="w-full p-4 pl-5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500 focus:bg-white/10 transition-all duration-300 @error('nama') border-red-500/50 @enderror"/>
            <div class="absolute bottom-0 left-0 h-[2px] w-0 bg-purple-500 group-focus-within:w-full transition-all duration-300"></div>
            @error('nama') <span class="text-red-500 text-[10px] mt-1 ml-2">{{ $message }}</span> @enderror
        </div>
        
        <div class="relative group">
            <textarea wire:model="pesan" placeholder="Pesan / Deskripsi Anda" class="w-full p-4 pl-5 rounded-xl bg-white/5 border border-white/10 text-white placeholder-gray-500 focus:outline-none focus:border-purple-500 focus:bg-white/10 transition-all duration-300 @error('pesan') border-red-500/50 @enderror" rows="4"></textarea>
            <div class="absolute bottom-1 left-0 h-[2px] w-0 bg-purple-500 group-focus-within:w-full transition-all duration-300"></div>
            @error('pesan') <span class="text-red-500 text-[10px] mt-1 ml-2">{{ $message }}</span> @enderror
        </div>

        <div class="flex flex-col sm:flex-row gap-4 mt-4">
            <button type="button" wire:click="kirimEmail" wire:loading.attr="disabled" class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-500 hover:to-indigo-500 text-white py-3 px-6 rounded-xl font-bold shadow-lg shadow-purple-900/40 hover:shadow-purple-700/60 hover:-translate-y-1 transition-all duration-300 disabled:opacity-50">
                <i class="fas fa-paper-plane" wire:loading.remove wire:target="kirimEmail"></i>
                <i class="fas fa-spinner animate-spin" wire:loading wire:target="kirimEmail"></i>
                Kirim Email
            </button>
            <button type="button" wire:click="kirimWhatsapp" wire:loading.attr="disabled" class="flex-1 flex items-center justify-center gap-2 bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-500 hover:to-emerald-500 text-white py-3 px-6 rounded-xl font-bold shadow-lg shadow-green-900/40 hover:shadow-green-700/60 hover:-translate-y-1 transition-all duration-300 disabled:opacity-50">
                <i class="fab fa-whatsapp text-lg" wire:loading.remove wire:target="kirimWhatsapp"></i>
                <i class="fas fa-spinner animate-spin" wire:loading wire:target="kirimWhatsapp"></i>
                Kirim WhatsApp
            </button>
        </div>
    </form>
</div>
