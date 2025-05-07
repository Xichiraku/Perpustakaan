@props([
    'title' => 'Peminjam Terbanyak',
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
                        <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Nama Siswa</th>
                        <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Kelas</th>
                        <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Jumlah Buku</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white dark:bg-gray-800" {{ $rows }}>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Muhamad Aulia <img src="{{ asset('images/gold.png') }}" alt="Icon" class="h-5 w-5 ml-2 inline">
                        </td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">10 Buku</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Putri Nazma <img src="{{ asset('images/silver.png') }}" alt="Icon" class="h-5 w-5 ml-2 inline">
                        </td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">7 Buku</td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                            Yulia Nabila <img src="{{ asset('images/bronze.png') }}" alt="Icon" class="h-5 w-5 ml-2 inline">
                        </td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5</td>
                        <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5 Buku</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
