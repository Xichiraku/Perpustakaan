<div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSTAKALAYA</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="flex flex-wrap overflow-auto">
    <?php include 'index.php'; ?>
    <div class="content p-5 transition-all md:ml-52 md:mt-16 mt-12 w-full">
        <div class="container mx-auto">
            <h3 class="text-xl font-bold flex items-center"><i class="fas fa-book me-2"></i> Daftar Buku</h3>
            <hr class="my-4">

            <!-- Tambah Data Button -->
            <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 flex items-center" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                <i class="fas fa-plus-circle mr-2"></i>TAMBAH DATA BUKU
            </button>

            <!-- Modal Sections -->
            <?php include 'modal/modal_tambah_buku.php'; ?>
            <?php include 'modal/modal_edit_buku.php'; ?>
            <?php include 'modal/modal_hapus_buku.php'; ?>

            <!-- Responsive Table -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300 text-sm md:text-base">
                    <thead class="bg-gray-200">
                        <tr>
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
                            <th class="border p-2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM buku");
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr class="hover:bg-gray-100">
                                <td class="border p-2 text-center"><?= $no++ ?></td>
                                <td class="border p-2 text-center"><?= $data['isbn'] ?></td>
                                <td class="border p-2 text-center"><?= $data['judul_buku'] ?></td>
                                <td class="border p-2 text-center"><?= $data['penulis'] ?></td>
                                <td class="border p-2 text-center"><?= $data['penerbit'] ?></td>
                                <td class="border p-2 text-center"><?= $data['tahun_terbit'] ?></td>
                                <td class="border p-2 text-center"><?= $data['stok'] ?></td>
                                <td class="border p-2 text-center truncate w-40"> <?= $data['sinopsis'] ?> </td>
                                <td class="border p-2 text-center"><?= $data['jenis_buku'] ?></td>
                                <td class="border p-2 text-center"><?= $data['kelas'] ?></td>
                                <td class="border p-2 text-center">
                                    <img src="../uploads/<?= $data['foto']; ?>" alt="Foto" class="w-24 h-24 object-cover rounded">
                                </td>
                                <td class="border p-2 flex flex-col md:flex-row justify-center items-center gap-2">
                                    <button class="bg-green-500 text-white px-3 py-1 rounded text-sm flex items-center"
                                        data-bs-toggle="modal" data-bs-target="#editDataModal"
                                        data-isbn="<?= $data['isbn'] ?>"
                                        data-judul_buku="<?= $data['judul_buku'] ?>"
                                        data-penulis="<?= $data['penulis'] ?>"
                                        data-penerbit="<?= $data['penerbit'] ?>"
                                        data-tahun_terbit="<?= $data['tahun_terbit'] ?>"
                                        data-stok="<?= $data['stok'] ?>"
                                        data-sinopsis="<?= $data['sinopsis'] ?>"
                                        data-jenis_buku="<?= $data['jenis_buku'] ?>"
                                        data-kelas="<?= $data['kelas'] ?>"
                                        data-foto="<?= $data['foto']; ?>">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </button>
                                    <button class="bg-red-500 text-white px-3 py-1 rounded text-sm flex items-center"
                                        data-bs-toggle="modal" data-bs-target="#deleteModal"
                                        data-id="<?= $data['isbn'] ?>">
                                        <i class="fas fa-trash-alt mr-1"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>
