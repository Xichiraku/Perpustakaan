@extends('layouts.app')
@section('title', 'Statistik')

@section('content')



    <!-- Container utama untuk tombol dan search -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-4 w-full">
        <!-- Tombol Peminjaman dan Statistik -->
        <div class="flex gap-2 mb-3 sm:mb-0">
            <a href="{{ route('datapeminjaman') }}"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                Peminjaman
            </a>
            <a href="{{ route('statistik') }}"
                class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800">
                Statistik
            </a>
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
            <button type="button"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                + Tambah
            </button>
        </div>
    </div>
    <!-- Card Tabel Peminjam Terbanyak -->
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
        <div class="mb-4">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-800">Peminjam Terbanyak, di Januari</h3>
                <div class="flex gap-x-2">
                    <!-- Filter Kategori -->
                    <select id="filter-kategori"
                        class="w-28 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:black-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <option selected disabled>Kelas</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>

                    <!-- Filter Kelas -->
                    <select id="filter-kelas"
                        class="w-28 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-black-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <option selected disabled>Bulan</option>
                        <option value="januari">Januari</option>
                        <option value="februari">Februari</option>
                        <option value="maret">Maret</option>
                        <option value="april">April</option>
                        <option value="mei">Mei</option>
                        <option value="juni">Juni</option>
                        <option value="juli">Juli</option>
                        <option value="agustus">Agustus</option>
                        <option value="september">September</option>
                        <option value="oktober">Oktober</option>
                        <option value="november">November</option>
                        <option value="desember">Desember</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="w-full overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-black dark:text-black border-2 border-gray-300 dark:border-gray-700">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black">
                            <tr>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Nama
                                    Siswa</th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Kelas
                                </th>
                                <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">
                                    Jumlah
                                    Buku</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800">
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                    Muhamad Aulia <img src="{{ asset('images/gold.png') }}" alt="Icon"
                                        class="h-5 w-5 ml-2 inline">
                                </td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6
                                </td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">10
                                    Buku
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                    Putri Nazma <img src="{{ asset('images/silver.png') }}" alt="Icon"
                                        class="h-5 w-5 ml-2 inline"></td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6
                                </td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">7
                                    Buku
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                    Yulia Nabila <img src="{{ asset('images/bronze.png') }}" alt="Icon"
                                        class="h-5 w-5 ml-2 inline"></td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5
                                </td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5
                                    Buku
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                    Nur Alfi Syahrin</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5
                                </td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">3
                                    Buku
                                </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                                <td
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                    Putra Maulana</td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">5
                                </td>
                                <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">2
                                    Buku
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

@endsection