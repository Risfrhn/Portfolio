<div class="relative mt-36 mb-14 z-10">
    <div class="grid grid-cols-12 my-14 gap-4 z-10">
        <div class="col-span-12">
            <p class="text-3xl text-center lg:text-5xl lg:my-2 font-semibold bg-gradient-to-r from-purple-400 via-blue-500 to-indigo-600 bg-clip-text text-transparent">
                {{ $title }}
            </p>
        </div>

        <div class="col-span-12">
            <p class="text-gray-500 text-center mt-1 mb-5">{{ $desc }}</p>
        </div>

        @isset($control)
            <div class="col-span-12 flex justify-end gap-3 mx-3 mt-12">
                {{ $control }}
            </div>
        @endisset

        @isset($card)
            <div class="col-span-12 z-10">
                <div class="grid grid-cols-12 place-content-center gap-3">
                    {{ $card }}
                </div>
            </div>
        @endisset

        @isset($button)
            <div class="col-span-12 mt-5">
                <div class="flex flex-wrap gap-3 justify-center">
                    {{ $button }}
                </div>
            </div>
        @endisset
    </div>
</div>
