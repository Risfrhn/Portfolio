<div class="flex flex-col">
        <div class="flex gap-2">
            <input wire:model="input" class="border-none rounded-lg block w-full px-3 py-2.5 text-gray-200 placeholder-gray-500 pr-10 bg-[#1e1e1e] shadow-[inset_4px_4px_8px_#141414,inset_-4px_-4px_8px_#2a2a2a] focus:shadow-[inset_6px_6px_12px_#141414,inset_-6px_-6px_12px_#2a2a2a] transition-all duration-300" required />
            <button type="button" wire:click="add" class="inline-flex items-center justify-center p-0.5 text-sm font-medium tracking-wide text-white transition duration-300 rounded-md shadow-lg focus-visible:outline-none whitespace-nowrap group bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none hover:shadow-[0_0_20px_rgba(130,90,250,0.4)]">
                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#0b0b14] rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
                    Add
                </span>
            </button>
        </div>
     </div>
    <!-- Show value input -->
     <div class="flex flex-wrap gap-2">
        @foreach($tags as $data => $tags)
            <div  wire:key="tags-{{ $data }}" class="flex items-center gap-1">
                <x-component.icon.var3 nameTool="{{$tags}}">
                    <button type="button" wire:cick="remove({{$data}})" class="text-white mx-2 text-xs">x</button>
                </x-component.icon.var3>
            </div>
        @endforeach
     </div>