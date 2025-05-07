@extends('layouts.app')
@section('title', 'Riwayat Aktivitas')

@section('content')



    <!-- Container utama untuk tombol dan search -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-4 w-full">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4">
            <h3 class="text-2xl font-semibold text-gray-800">Riwayat Aktivitas</h3>
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto"></div>
        </div>

        <!-- Search Bar dan Tambah Button -->
        <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
            <div class="relative w-full sm:w-64">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-search text-gray-500"></i>
                </div>
                <input type="text" id="search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Cari...">
            </div>
            <!-- Date Picker (replacing the +Tambah button) -->
            <div class="relative w-full sm:w-36"> <!-- Adjusted width -->
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-calendar-alt text-gray-500 dark:text-gray-400"></i>
                </div>
                <input datepicker type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Pilih tanggal">
            </div>
        </div>
    </div>
    <!-- Card Tabel Peminjam Terbanyak -->
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
        <div class="mb-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Hari ini - Selasa,22 April 2025</h3>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="w-full overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-black dark:text-black border-2 border-gray-300 dark:border-gray-700">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Aktivitas</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Pengguna</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Meminjam Buku "Matahari"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Riansyah</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">32
                                    menit yang lalu</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Mengembalikan Buku "Bulan"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Putra Maulana</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">1
                                    jam yang lalu</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Menambahkan Buku "Bintang"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Rafif Ruhul Haqq</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">2
                                    jam yang lalu</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Memperbarui Data Buku "Bintang"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Rafif Ruhul Haqq</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">3
                                    jam yang lalu</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
        <div class="mb-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Kemarin - Senin,21 April 2025</h3>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="w-full overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-black dark:text-black border-2 border-gray-300 dark:border-gray-700">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Aktivitas</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Pengguna</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Meminjam Buku "Matahari"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Riansyah</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    14.50</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Mengembalikan Buku "Bulan"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Putra Maulana</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    13.21</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Menambahkan Buku "Bintang"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Rafif Ruhul Haqq</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    10.15</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Memperbarui Data Buku "Bintang"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Rafif Ruhul Haqq</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    09.28</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
        <div class="mb-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Jumat, 18 April 2025</h3>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="w-full overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-black dark:text-black border-2 border-gray-300 dark:border-gray-700">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Aktivitas</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Pengguna</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Meminjam Buku "Matahari"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Riansyah</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    14.50</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Mengembalikan Buku "Bulan"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Putra Maulana</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    13.21</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Menambahkan Buku "Bintang"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Rafif Ruhul Haqq</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    10.15</td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Memperbarui Data Buku "Bintang"</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    Rafif Ruhul Haqq</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                    09.28</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

@endsection