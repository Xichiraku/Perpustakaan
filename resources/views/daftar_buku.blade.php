<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSTAKALAYA</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Sidebar would be included here -->
    
    <div class="ml-64 mt-16 p-6">
        <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-semibold">
                <i class="fas fa-book me-2"></i> Daftar Buku
            </h3>
            <hr class="mb-4">

            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border p-2">NO</th>
                            <th class="border p-2">ISBN</th>
                            <th class="border p-2">JUDUL BUKU</th>
                            <th class="border p-2">PENULIS</th>
                            <th class="border p-2">PENERBIT</th>
                            <th class="border p-2">TAHUN TERBIT</th>
                            <th class="border p-2">STOK</th>
                            <th class="border p-2">SINOPSIS</th>
                            <th class="border p-2">JENIS BUKU</th>
                            <th class="border p-2">KELAS</th>
                            <th class="border p-2">SAMPUL BUKU</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border p-2 text-center">1</td>
                            <td class="border p-2">978-602-8519-94-2</td>
                            <td class="border p-2">Pemrograman Web</td>
                            <td class="border p-2">John Doe</td>
                            <td class="border p-2">Penerbit A</td>
                            <td class="border p-2">2021</td>
                            <td class="border p-2 text-center">10</td>
                            <td class="border p-2">Sinopsis buku...</td>
                            <td class="border p-2">Teknologi</td>
                            <td class="border p-2">XII</td>
                            <td class="border p-2">
                                <img src="../uploads/sample.jpg" alt="Sampul" class="w-20 h-auto mx-auto">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>