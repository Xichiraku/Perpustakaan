@extends('layouts.app')
@section('title', 'Beranda')
@section('content')

    {{-- Card Data --}}
    <div class="p-4 bg-white rounded-xl shadow-lg mb-6 border border-gray-200">
        <div class="grid grid-cols-3 gap-4 mb-4">
            @foreach ([
                ['count' => 42, 'label' => 'Total Buku', 'color' => 'blue-100'],
                ['count' => 16, 'label' => 'Buku Dipinjam', 'color' => 'yellow-100'],
                ['count' => 8, 'label' => 'Buku Dikembalikan', 'color' => 'green-100'],
            ] as $card)
                <div class="flex items-center justify-center h-32 rounded-lg bg-{{ $card['color'] }} p-6 shadow-md transition-all duration-300 hover:scale-105 cursor-pointer">
                    <div class="text-center">
                        <h2 class="text-xl font-bold text-black mb-2">{{ $card['count'] }}</h2>
                        <p class="text-sm font-medium text-black">{{ $card['label'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Aktivitas Terbaru --}}
    <x-card-aktivitas title="Aktivitas Terbaru" :headers="['Aktivitas', 'Pengguna', 'Waktu']">
        <x-slot name="rows">
            {{-- <tr>
                <td>Meminjam Buku "Matahari"</td><td>Riansyah</td><td>32 menit lalu</td>
            </tr>
            <tr>
                <td>Mengembalikan Buku "Bulan"</td><td>Putra Maulana</td><td>1 jam lalu</td>
            </tr>
            <tr>
                <td>Menambahkan Buku "Harmoni"</td><td>Rafif Ruhul Haqq</td><td>2 jam lalu</td>
            </tr> --}}
        </x-slot>
    </x-card-aktivitas>

    {{-- Peminjam Terbanyak --}}
    <x-card-peminjam title="Peminjam Terbanyak" :headers="['Nama Siswa', 'Kelas', 'Jumlah Buku']">
        <x-slot name="rows">
            {{-- <tr>
                <td>Muhamad Aulia <img src="{{ asset('images/gold.png')  }}" class="h-5 w-5 ml-2 inline"></td><td>6</td><td>10 Buku</td>
            </tr>
            <tr>
                <td>Putri Nazma <img src="{{ asset('images/bronze.png') }}" class="h-5 w-5 ml-2 inline"></td><td>6</td><td>7 Buku</td>
            </tr> --}}
        </x-slot>
    </x-card-peminjam>
@endsection