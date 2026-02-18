<div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-5 bg-[#1D1D29]">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                <tr>
                    <th class="py-3 px-6">Header</th>
                    <th class="py-3 px-6">Tentang saya</th>
                    <th class="py-3 px-6">skill</th>
                    <th class="py-3 px-6">CV</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-[#1D1D29] border-b dark:border-gray-700">
                    <td class="py-4 px-6">{{$data->deskripsi_header}}</td>
                    <td class="py-4 px-6">{{$data->deskripsi_tentang}}</td>
                    <td class="py-4 px-6 gap-2 flex flex-wrap">
                        @foreach ($data->skill_header ?? [] as $item)
                            <x-component.icon.wrapper :nameTool="$item"/>
                        @endforeach
                    </td>
                    <td class="py-4 px-6">{{$data->CV}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
