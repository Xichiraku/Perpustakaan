@props([
    'title' => 'Aktivitas Terbaru',
    'headers' => [],
])
<div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
    <div class="mb-4">
        <h3 class="text-lg font-semibold text-gray-800">{{ $title }}</h3>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4">
        <div class="w-full overflow-x-auto">
            <table
                class="w-full text-sm text-left rtl:text-right text-black dark:text-black border-2 border-gray-300 dark:border-gray-700">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black">
                    <tr>
                        @foreach ($headers as $header)
                        <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                            {{ $header }}</th>
                        {{-- <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">{{ $header('Pengguna') }}</th>
                        <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">{{ $header('Waktu') }}</th> --}}

                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    
                    <tr class="bg-white dark:bg-gray-800" {{ $rows }}>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Meminjam Buku "Matahari"</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Riansyah</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">32 menit yang lalu</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Mengembalikan Buku "Bulan"</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Putra Maulana</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">1 jam yang lalu</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Menambahkan Buku "Harmoni"</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Rafif Ruhul Haqq</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">2 jam yang lalu</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Memperbarui Data Buku "Bintang"</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Rafif Ruhul Haqq</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">3 jam yang lalu</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Memperbarui Data Buku "Rumah"</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Rafif Ruhul Haqq</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5 jam yang lalu</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
