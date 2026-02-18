<div>
    <div class="overflow-x-auto relative shadow-md sm:rounded-lg my-5 bg-[#1D1D29]">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-400 uppercase bg-gray-700">
                <tr>
                    <th class="py-3 px-6">Nama Sertifikat</th>
                    <th class="py-3 px-6">Nama Institusi</th>
                    <th class="py-3 px-6">Tanggal Terbit</th>
                    <th class="py-3 px-6">Tanggal Berlaku</th>
                    <th class="py-3 px-6">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @if($sertifikat->count() > 0)
                    @foreach($sertifikat as $item)
                        <tr class="bg-[#1D1D29] border-b dark:border-gray-700">
                            <td class="py-4 px-6">{{$item->judul}}</td>
                            <td class="py-4 px-6">{{$item->nama_institusi}}</td>
                            <td class="py-4 px-6">{{$item->tanggal_terbit}}</td>
                            <td class="py-4 px-6">{{$item->tanggal_berlaku}}</td>
                            <td class="py-4 px-6">
                                <button wire:click="bukaModalEdit({{$item->id}})" class="text-blue-500 hover:text-blue-600 transition-colors mx-1"><i class="fas fa-edit"></i></button>
                                <button wire:click="bukaAlertDelete({{$item->id}})" class="text-red-500 hover:text-red-600 transition-colors mx-1"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="bg-[#1D1D29] border-b dark:border-gray-700">
                        <td class="py-4 px-6" colspan="5">
                            <div class="flex gap-2 place-content-center">
                                <img src="/error.gif" alt="">
                            </div>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
