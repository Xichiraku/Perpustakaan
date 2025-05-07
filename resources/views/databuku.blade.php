@extends('layouts.app')
@section('title', 'Data Buku')

@section('content')



    <div class="mb-4">
        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Data Buku</h3>
        <!-- Search & Filter -->
        <div class="flex flex-col sm:flex-row sm:items-center gap-3 w-full justify-between">
            <!-- Kiri: Search & Dropdowns -->
            <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto flex-grow">
                <!-- Search Bar -->
                <div class="relative w-full sm:w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <i class="fas fa-search text-gray-500"></i>
                    </div>
                    <input type="text" id="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Cari siswa...">
                </div>

                <!-- Filter Kategori -->
                <select id="filter-kategori"
                    class="w-28 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option selected disabled>Kategori</option>
                    <option value="pelajaran">Pelajaran</option>
                    <option value="fiksi">Fiksi</option>
                    <option value="nonfiksi">Non Fiksi</option>
                </select>

                <!-- Filter Kelas -->
                <select id="filter-kelas"
                    class="w-28 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option selected disabled>Kelas</option>
                    <option value="6">Kelas 6</option>
                    <option value="5">Kelas 5</option>
                    <option value="4">Kelas 4</option>
                    <option value="3">Kelas 3</option>
                    <option value="2">Kelas 2</option>
                    <option value="1">Kelas 1</option>
                </select>
            </div>

            <!-- Kanan: Button Tambah -->
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
                class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                + Tambah
            </button>
        </div>
    </div>
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
        <div class="grid grid-cols-5 gap-4 mb-4">
            <div onclick="openDetailModal({
image: '../bahanpbl/1.png',
isbn: '123456789',
title: 'Bahasa Indonesia',
author: 'Penulis A',
publisher: 'Penerbit A',
year: '2022',
stock: '10',
description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore remLorem ipsum dolor sit amet consectetur adipisicing elit. Qui nostrum velit dolorum recusandae, quam unde accusamus deserunt quaerat hic repellendus animi placeat aperiam exercitationem enim, quae, obcaecati consequatur tempore rem.'
})" data-modal-target="detailModal" data-modal-toggle="detailModal"
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="{{ asset('images/1.png') }}" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Bahasa Indonesia</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/4/10/sqew3j5qexpsolyjghtrom.jpg"
                    alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Si Putih</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/img20220905_11493451.jpg"
                    alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Hujan</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="{{ asset('images/2.png') }}" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">PJOK</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Tanaha Para Bandit</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="{{ asset('images/3.png') }}" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Bahasa Indonesia</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/6/bcekrdxnwcemqhgkreithj.jpg"
                    alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Bahasa Indonesia</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="{{ asset('images/4.png') }}" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Bahasa Indonesia</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="{{ asset('images/5.png') }}" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Bahasa Indonesia</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="{{ asset('images/6.png') }}" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Bahasa Indonesia</p>
            </div>
        </div>
    </div>
</div>



<!-- Modal Tambah Buku -->
<div id="crud-modal" tabindex="-1" aria-hidden="true"
    class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-lg max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Header -->
            <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Data Buku</h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8"
                    data-modal-toggle="crud-modal">
                    ✕
                </button>
            </div>

            <!-- Form -->
            <form action="kelola/tambah_buku.php" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="isbn"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ISBN</label>
                        <input type="text" id="isbn" name="isbn" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div>
                        <label for="judul_buku"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Buku</label>
                        <input type="text" id="judul_buku" name="judul_buku" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="penulis"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                        <input type="text" id="penulis" name="penulis" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                    <div>
                        <label for="penerbit"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penerbit</label>
                        <input type="text" id="penerbit" name="penerbit" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="tahun_terbit"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun
                            Terbit</label>
                        <select id="tahun_terbit" name="tahun_terbit" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option value="" disabled selected>Pilih Tahun</option>
                            <?php
                            $currentYear = date("Y");
                            for ($year = $currentYear; $year >= 1900; $year--) {
                                echo "<option value=\"$year\">$year</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div>
                        <label for="stok"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                        <input type="number" id="stok" name="stok" min="0" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>
                </div>

                <div>
                    <label for="sinopsis"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sinopsis</label>
                    <textarea id="sinopsis" name="sinopsis" rows="3" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"></textarea>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="jenis_buku"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Buku</label>
                        <select id="jenis_buku" name="jenis_buku" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option selected="pilih">Pilih</option>
                            <option value="Pelajaran">Pelajaran</option>
                            <option value="Fiksi">Fiksi</option>
                            <option value="Non-Fiksi">Non-Fiksi</option>
                        </select>
                    </div>
                    <div>
                        <label for="kelas"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <select id="kelas" name="kelas" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option selected="pilih">Pilih</option>
                            <option value="tidak ada">Tidak Ada</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4">4</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="foto"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                    <input type="file" id="foto" name="foto" accept="image/*" required
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail Buku (Flowbite) -->
<div id="detailModal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="relative w-full max-w-3xl h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white" id="detailModalLabel">Detail Buku
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="detailModal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 
                        1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 
                        1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 
                        10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <!-- Body -->
            <div class="p-6 space-y-6">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="md:w-1/3 flex justify-center">
                        <img id="modalImage" src="https://via.placeholder.com/150" class="-lg max-h-60" alt="Cover">
                    </div>
                    <div class="md:w-2/3">
                        <ul class="text-sm text-gray-800 dark:text-gray-200 space-y-4">
                            <li><strong>ISBN:</strong> <span id="modalPrimary"></span></li>
                            <li><strong>Judul:</strong> <span id="modalTitle"></span></li>
                            <li><strong>Penulis:</strong> <span id="modalAuthor"></span></li>
                            <li><strong>Penerbit:</strong> <span id="modalPublisher"></span></li>
                            <li><strong>Tahun:</strong> <span id="modalYear"></span></li>
                            <li><strong>Jumlah Stok:</strong> <span id="modalStock"></span></li>
                            <li>
                                <strong>Sinopsis:</strong><br>
                                <div class="max-h-40 overflow-y-auto mt-1 p-2 bg-gray-50 rounded">
                                    <span id="modalDescription"></span>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex items-center justify-end p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button onclick="showBorrowModal()" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ubah
                </button>
            </div>
        </div>
    </div>
</div>



<script>
    function openDetailModal(data) {
        document.getElementById('modalImage').src = data.image;
        document.getElementById('modalPrimary').textContent = data.isbn;
        document.getElementById('modalTitle').textContent = data.title;
        document.getElementById('modalAuthor').textContent = data.author;
        document.getElementById('modalPublisher').textContent = data.publisher;
        document.getElementById('modalYear').textContent = data.year;
        document.getElementById('modalStock').textContent = data.stock;
        document.getElementById('modalDescription').textContent = data.description;
    }
</script>

<script>
    const togglePassword = document.getElementById('toggle-password');
    const passwordField = document.getElementById('new-password');

    togglePassword.addEventListener('click', function () {
        // Toggle the type attribute
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Toggle the eye icon
        togglePassword.innerHTML = type === 'password' ?
            '<i class="far fa-eye w-5 h-5 text-gray-500 dark:text-white"></i>' :
            '<i class="far fa-eye-slash w-5 h-5 text-gray-500 dark:text-white"></i>';
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
@endsection

