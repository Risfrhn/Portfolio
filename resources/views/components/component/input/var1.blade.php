<div class="flex flex-col" x-data="{ show: false }">
    <p class="mb-2 text-gray-500">{{$label}}</p>
    @if($type === 'file')
        <input type="file" wire:model="{{ $model }}" class="border-none rounded-lg px-3 py-2.5 w-full text-gray-200 placeholder-gray-500 bg-[#1e1e1e] shadow-inner focus:shadow-inner" />
        @error($model) <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
    @else
    <input @if($readonly) readonly @endif :type="'{{ $type }}' === 'password' ? (show ? 'text' : 'password') : '{{ $type }}'" wire:model="{{ $model }}" class="border-none rounded-lg block w-full px-3 py-2.5 text-gray-200 placeholder-gray-500 pr-10 bg-[#1e1e1e] shadow-[inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300" placeholder="{{$placeholder}}" />
    @endif
    @if($type === 'password')
        <button type="button" @click="show = !show" class="absolute right-5 top-14 -translate-y-1/2 text-gray-400">
            <i x-bind:class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
        </button>
    @endif
</div>