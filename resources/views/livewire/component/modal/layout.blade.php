<div>
    @if ($show && $component)
        <div class="fixed inset-0 bg-black/60 z-[9999] flex items-center justify-center p-4">
            <div  class="bg-[#0b0b14] text-white w-full max-w-xl rounded-xl relative max-h-[85vh] overflow-y-auto translate-y-1">
                <div class="grid grid-cols-12 p-5">
                    @if($component)
                        @livewire($component, ['data' => $param], key($component . '-' . md5(json_encode($param ?? []))))
                    @endif                
                </div>
            </div>
        </div>
    @endif
</div>