@extends('layouts.siswa')
@section('title', 'Beranda Siswa')

@section('content')

<div class="p-4 sm:ml-19 mt-7">
    <div class="p-8 bg-white-100 border border-white-300 text-black-900 rounded-xl shadow mb-6 max-w-7xl mx-auto">
        <h4 class="text-xl font-semibold">Selamat datang, pengguna!</h4>
        <p class="text-sm mt-1 font">Gunakan fitur pencarian dan filter untuk menemukan buku yang kamu butuhkan
            dengan
            mudah.</p>
    </div>
    <!-- Card Utama -->
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200 max-w-7xl mx-auto">
        <!-- Kiri: Search & Dropdowns -->
        <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto flex-grow mb-6">
            <!-- Search Bar -->
            <div class="relative w-full sm:w-64">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <i class="fas fa-search text-gray-500"></i>
                </div>
                <input type="text" id="search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Cari buku...">
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


        <!-- Card Buku -->
        <div class="grid grid-cols-6 gap-8 mb-4">
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
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
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
                <img src="../bahanpbl/2.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">PJOK</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/14/2op5kuxbxmq8zvhdu8sqr8.jpg"
                    alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Tanah Para Bandit</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/3.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Pendidikan Pancasila</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/picture_meta/2023/2/6/bcekrdxnwcemqhgkreithj.jpg"
                    alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Selena</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/4.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">IPAS</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/5.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700">Matematika</p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/4.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/5.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
            <div
                class="flex items-center justify-center flex-col rounded-lg bg-white-100 p-4 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer transform-gpu origin-center">
                <img src="../bahanpbl/1.png" alt="Book Icon" class="h-auto max-w-full">
                <p class="mt-2 text-sm text-center text-gray-700"></p>
            </div>
        </div>
    </div>
</div>

@endsection