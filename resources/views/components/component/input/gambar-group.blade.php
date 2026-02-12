<div>
    <div class="bg-blackborder-none rounded-lg block w-full px-3 py-2.5 text-gray-200 placeholder-gray-500 pr-10 bg-[#1e1e1e] shadow-inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300">
        <input type="file" wire:model="{{ $model }}">
        @error($model) <span class="error">{{ $message }}</span> @enderror
    </div>
</div>
