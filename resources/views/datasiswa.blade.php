@extends('layouts.dasis')
@section('title', 'Data Siswa')

@section('content')


    <!-- Tabel -->

        <!-- Header dengan search dan tombol -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-4 gap-4">
            <h3 class="text-2xl font-semibold text-gray-800">Data Siswa</h3>
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                <!-- Search Bar -->
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-search text-gray-500"></i>
                    </div>
                    <input type="text" id="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Cari siswa...">
                </div>
            <button type="button"
                class="flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                <i class="fas fa-file-export"></i>
                Import
            </button>
                <!-- Tombol Default -->
                <button type="button"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                    + Tambah
                </button>
            </div>
        </div>
        <!--  -->
        <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="w-full overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-800 border border-gray-300">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3 w-[15%] border-b border-gray-300">NIS</th>
                                <th scope="col" class="px-4 py-3 w-[25%] border-b border-gray-300">Nama</th>
                                <th scope="col" class="px-4 py-3 w-[15%] border-b border-gray-300">Kelamin</th>
                                <th scope="col" class="px-4 py-3 w-[15%] border-b border-gray-300">Kelas</th>
                                <th scope="col" class="px-4 py-3 w-[30%] text-center border-b border-gray-300">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">3312411086</td>
                                <td class="px-4 py-3">Muhamad Aulia</td>
                                <td class="px-4 py-3">Laki-laki</td>
                                <td class="px-4 py-3">6</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                        </button>
                                        <button
                                            class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none"
                                            data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                                            <i class="fas fa-trash-alt mr-1"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">3312411087</td>
                                <td class="px-4 py-3">Putri Nazma</td>
                                <td class="px-4 py-3">Perempuan</td>
                                <td class="px-4 py-3">6</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                        </button>
                                        <button
                                            class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none">
                                            <i class="fas fa-trash-alt mr-1"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">3312411087</td>
                                <td class="px-4 py-3">Yulia Nabila</td>
                                <td class="px-4 py-3">Perempuan</td>
                                <td class="px-4 py-3">5</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                        </button>
                                        <button
                                            class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none">
                                            <i class="fas fa-trash-alt mr-1"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-4 py-3">3312411087</td>
                                <td class="px-4 py-3">Aprisius Togar</td>
                                <td class="px-4 py-3">Laki-laki</td>
                                <td class="px-4 py-3">4</td>
                                <td class="px-4 py-3">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-2 focus:ring-blue-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                        </button>
                                        <button
                                            class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-red-300 font-medium rounded text-xs px-3 py-1.5 focus:outline-none"
                                            data-modal-target="deleteModal">
                                            <i class="fas fa-trash-alt mr-1"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="deleteModal">
                    <i class="fas fa-times w-3 h-3"></i>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <i class="fas fa-exclamation-circle mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"></i>
                    <h3 class="mb-5 text-lg font-medium text-gray-500 dark:text-gray-400">Apakah yakin ingin menghapus
                        data ini?</h3>
                    <div class="flex justify-center space-x-4">
                        <button data-modal-hide="deleteModal" type="button"
                            class="py-2 px-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 hover:text-gray-900 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
                            Batal
                        </button>
                        <button id="confirmDelete" data-modal-hide="deleteModal" type="button"
                            class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
@endsection