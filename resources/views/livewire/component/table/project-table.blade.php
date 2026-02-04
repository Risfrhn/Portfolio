<div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-5 bg-[#1D1D29]">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                <tr>
                    <th class="py-3 px-6">Nama Projek</th>
                    <th class="py-3 px-6">Tipe Projek</th>
                    <th class="py-3 px-6">Kategori Projek</th>
                    <th class="py-3 px-6">Alat Projek</th>
                    <th class="py-3 px-6">Aksi Projek</th>
                </tr>
            </thead>
            <tbody>
                @foreach($project as $item)
                    <tr class="bg-[#1D1D29] border-b dark:border-gray-700">
                        <td class="py-4 px-6">{{$item->nama_projek}}</td>
                        <td class="py-4 px-6">{{$item->tipe_projek}}</td>
                        <td class="py-4 px-6">{{$item->kategori}}</td>
                        <td class="py-4 px-6">{{$item->alat}}</td>
                        <td class="py-4 px-6">
                            <button class="text-blue-500 hover:text-blue-600 transition-colors mx-1"><i class="fas fa-edit"></i></button>
                            <button class="text-red-500 hover:text-red-600 transition-colors mx-1"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-[#1D1D29] border-b dark:border-gray-700">
                    <td class="py-4 px-6" colspan="5">
                        <div class="flex gap-2 place-content-center">
                            <img src="/error.gif" alt="">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
