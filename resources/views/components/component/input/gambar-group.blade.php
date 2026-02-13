<div>
    <p class="mb-2 text-gray-500">{{$label}}</p>
    <div class="bg-blackborder-none rounded-lg block w-full my-2 px-3 py-2.5 text-gray-200 placeholder-gray-500 pr-10 bg-[#1e1e1e] shadow-inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300">
        <input type="file" wire:model="{{ $model }}">
        @error($model) <span class="error">{{ $message }}</span> @enderror
    </div>
    <p class="my-2 text-gray-500">Preview:</p>
    <div class="flex flex-nowrap gap-2 mt-3 mb-10 overflow-x-auto">
        {{$slot}}
    </div>
</div>
