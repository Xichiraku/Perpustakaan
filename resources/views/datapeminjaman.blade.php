@extends('layouts.app')
@section('title', 'Data Peminjaman')

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

        <!-- Search Bar dan Export Button -->
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
                class="flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                <i class="fas fa-file-export"></i>
                Export
            </button>
        </div>
    </div>
            <!-- Card Tabel Peminjam Terbanyak -->
            <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
                <div class="grid grid-cols-1 gap-4 mb-4">
                    <div class="w-full overflow-x-auto">
                        <table
                            class="w-full text-sm text-left rtl:text-right text-black dark:text-black border-2 border-gray-300 dark:border-gray-700">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-black">
                                <tr>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Buku
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">NIS</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Kelas
                                    </th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Tgl
                                        Peminjaman</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Tgl
                                        Pengembalian</th>
                                    <th scope="col" class="px-6 py-3 border-b border-gray-300 dark:border-gray-600">Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white dark:bg-gray-800">
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/products/95ob5m98ur.jpg" alt="Gambar Buku" class="h-30 w-20 inline">
                                    </td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        3312411086</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Muhamad
                                        Aulia</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        20/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        27/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        <button onclick="toggleStatus(this)"
                                            class="px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                                            Proses
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/img20220905_11324048.jpg" alt="Gambar Buku" class="h-30 w-20 inline">
                                    </td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        3312411086</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Putri Nazma</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        20/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        27/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        <button onclick="toggleStatus(this)"
                                            class="px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                                            Proses
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/6/ee8wt7s2thupknxj7tmk6f.jpg " alt="Gambar Buku" class="h-30 w-20 inline">
                                    </td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        3312411086</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Yulia Nabila</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        20/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        27/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        <button onclick="toggleStatus(this)"
                                            class="px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                                            Proses
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/basfpfnrkm6z7f7y63btba.jpg" alt="Gambar Buku" class="h-30 w-20 inline">
                                    </td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        3312411086</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Aprisius Togar</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        20/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        27/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        <button onclick="toggleStatus(this)"
                                            class="px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                                            Proses
                                        </button>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <td
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border-b border-gray-300 dark:border-gray-600">
                                        <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/img20220830_10560995.jpg" alt="Gambar Buku" class="h-30 w-20 inline">
                                    </td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        3312411086</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">Dicky Sulisetyo Wicaksono</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">6</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        20/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        27/03/2025</td>
                                    <td class="px-6 py-4 font-medium border-b border-gray-300 dark:border-gray-600">
                                        <button onclick="toggleStatus(this)"
                                            class="px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                                            Proses
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleStatus(button) {
                const statuses = ["Dipinjam", "Dikembalikan", "Proses"];
                const current = button.textContent.trim();
                const nextIndex = (statuses.indexOf(current) + 1) % statuses.length;
                button.textContent = statuses[nextIndex];
    
                // Optional: Ubah warna tombol sesuai status
                const colors = {
                    "Dipinjam": "bg-blue-500 hover:bg-blue-500",
                    "Dikembalikan": "bg-green-500 hover:bg-green-600",
                    "Proses": "bg-yellow-400 hover:bg-yellow-500"
                };
    
                // Reset kelas dan terapkan yang baru
                button.className = `px-3 py-1 rounded-lg text-white text-xs font-semibold ${colors[statuses[nextIndex]]}`;
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
@endsection