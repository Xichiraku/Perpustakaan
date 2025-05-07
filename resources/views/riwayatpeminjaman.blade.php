@extends('layouts.siswa')
@section('title', 'Riwayat Peminjaman')

@section('content')

<div class="p-4 sm:ml-19 mt-7">
    <!-- Card Utama -->
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200 max-w-7xl mx-auto">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Riwayat Peminjaman</h3>
        <!-- Kiri: Search & Dropdowns -->
        <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto flex-grow mb-6">
            <!-- Filter Kategori -->
            <select id="filter-kategori"
                class="w-28 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-black-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <option selected disabled>Status</option>
                <option value="pelajaran">Proses</option>
                <option value="fiksi">Dipinjam</option>
                <option value="nonfiksi">Dikembalikan</option>
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

        <!-- Card Riwayat Peminjaman -->
        <div class="grid grid-cols-3 gap-4 mb-4">
            <!-- Card 1 -->
            <div
                class="relative flex items-start h-55 rounded-lg bg-white-100 p-4 pb-12 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">

                <!-- Gambar di kiri -->
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Gambar Buku" class="w-30 h-40 object-cover mr-4">

                <!-- Konten teks -->
                <div class="text-left space-y-4">
                    <p class="text-sm font-medium text-black">Judul Buku:</p>
                    <p class="text-sm font-medium text-black">Tgl Peminjaman:</p>
                    <p class="text-sm font-medium text-black">Tgl Pengembalian:</p>
                    <p class="text-sm font-medium text-black">Keterangan:</p>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-black mr-2">Penilaian:</p>
                        <div class="rating-stars flex items-center" data-rating="4">
                            <!-- Menggunakan ukuran medium (1.5rem ~ 24px) -->
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="1"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="2"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="3"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="4"></i>
                            <i class="fas fa-star text-gray-300 ms-1 star text-xs   " data-value="5"></i>
                        </div>
                    </div>
                </div>

                <!-- Tombol di pojok kanan bawah -->
                <button onclick="toggleStatus(this)"
                    class="absolute bottom-3 right-3 px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                    Proses
                </button>
            </div>
            <div
                class="relative flex items-start h-55 rounded-lg bg-white-100 p-4 pb-12 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">

                <!-- Gambar di kiri -->
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Gambar Buku" class="w-30 h-40 object-cover mr-4">

                <!-- Konten teks -->
                <div class="text-left space-y-4">
                    <p class="text-sm font-medium text-black">Judul Buku:</p>
                    <p class="text-sm font-medium text-black">Tgl Peminjaman:</p>
                    <p class="text-sm font-medium text-black">Tgl Pengembalian:</p>
                    <p class="text-sm font-medium text-black">Keterangan:</p>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-black mr-2">Penilaian:</p>
                        <div class="rating-stars flex items-center" data-rating="4">
                            <!-- Menggunakan ukuran medium (1.5rem ~ 24px) -->
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="1"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="2"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="3"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="4"></i>
                            <i class="fas fa-star text-gray-300 ms-1 star text-xs   " data-value="5"></i>
                        </div>
                    </div>
                </div>

                <!-- Tombol di pojok kanan bawah -->
                <button onclick="toggleStatus(this)"
                    class="absolute bottom-3 right-3 px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                    Proses
                </button>
            </div>
            <div
                class="relative flex items-start h-55 rounded-lg bg-white-100 p-4 pb-12 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">

                <!-- Gambar di kiri -->
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Gambar Buku" class="w-30 h-40 object-cover mr-4">

                <!-- Konten teks -->
                <div class="text-left space-y-4">
                    <p class="text-sm font-medium text-black">Judul Buku:</p>
                    <p class="text-sm font-medium text-black">Tgl Peminjaman:</p>
                    <p class="text-sm font-medium text-black">Tgl Pengembalian:</p>
                    <p class="text-sm font-medium text-black">Keterangan:</p>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-black mr-2">Penilaian:</p>
                        <div class="rating-stars flex items-center" data-rating="4">
                            <!-- Menggunakan ukuran medium (1.5rem ~ 24px) -->
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="1"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="2"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="3"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="4"></i>
                            <i class="fas fa-star text-gray-300 ms-1 star text-xs   " data-value="5"></i>
                        </div>
                    </div>
                </div>

                <!-- Tombol di pojok kanan bawah -->
                <button onclick="toggleStatus(this)"
                    class="absolute bottom-3 right-3 px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                    Proses
                </button>
            </div>
            <div
                class="relative flex items-start h-55 rounded-lg bg-white-100 p-4 pb-12 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">

                <!-- Gambar di kiri -->
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Gambar Buku" class="w-30 h-40 object-cover mr-4">

                <!-- Konten teks -->
                <div class="text-left space-y-4">
                    <p class="text-sm font-medium text-black">Judul Buku:</p>
                    <p class="text-sm font-medium text-black">Tgl Peminjaman:</p>
                    <p class="text-sm font-medium text-black">Tgl Pengembalian:</p>
                    <p class="text-sm font-medium text-black">Keterangan:</p>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-black mr-2">Penilaian:</p>
                        <div class="rating-stars flex items-center" data-rating="4">
                            <!-- Menggunakan ukuran medium (1.5rem ~ 24px) -->
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="1"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="2"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="3"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="4"></i>
                            <i class="fas fa-star text-gray-300 ms-1 star text-xs   " data-value="5"></i>
                        </div>
                    </div>
                </div>

                <!-- Tombol di pojok kanan bawah -->
                <button onclick="toggleStatus(this)"
                    class="absolute bottom-3 right-3 px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                    Proses
                </button>
            </div>
            <div
                class="relative flex items-start h-55 rounded-lg bg-white-100 p-4 pb-12 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">

                <!-- Gambar di kiri -->
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Gambar Buku" class="w-30 h-40 object-cover mr-4">

                <!-- Konten teks -->
                <div class="text-left space-y-4">
                    <p class="text-sm font-medium text-black">Judul Buku:</p>
                    <p class="text-sm font-medium text-black">Tgl Peminjaman:</p>
                    <p class="text-sm font-medium text-black">Tgl Pengembalian:</p>
                    <p class="text-sm font-medium text-black">Keterangan:</p>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-black mr-2">Penilaian:</p>
                        <div class="rating-stars flex items-center" data-rating="4">
                            <!-- Menggunakan ukuran medium (1.5rem ~ 24px) -->
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="1"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="2"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="3"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="4"></i>
                            <i class="fas fa-star text-gray-300 ms-1 star text-xs   " data-value="5"></i>
                        </div>
                    </div>
                </div>

                <!-- Tombol di pojok kanan bawah -->
                <button onclick="toggleStatus(this)"
                    class="absolute bottom-3 right-3 px-3 py-1 rounded-lg bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold">
                    Proses
                </button>
            </div>
            <div
                class="relative flex items-start h-55 rounded-lg bg-white-100 p-4 pb-12 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">

                <!-- Gambar di kiri -->
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Gambar Buku" class="w-30 h-40 object-cover mr-4">

                <!-- Konten teks -->
                <div class="text-left space-y-4">
                    <p class="text-sm font-medium text-black">Judul Buku:</p>
                    <p class="text-sm font-medium text-black">Tgl Peminjaman:</p>
                    <p class="text-sm font-medium text-black">Tgl Pengembalian:</p>
                    <p class="text-sm font-medium text-black">Keterangan:</p>
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-black mr-2">Penilaian:</p>
                        <div class="rating-stars flex items-center" data-rating="4">
                            <!-- Menggunakan ukuran medium (1.5rem ~ 24px) -->
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="1"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="2"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="3"></i>
                            <i class="fas fa-star text-yellow-300 ms-1 star text-xs " data-value="4"></i>
                            <i class="fas fa-star text-gray-300 ms-1 star text-xs   " data-value="5"></i>
                        </div>
                    </div>
                </div>


@endsection