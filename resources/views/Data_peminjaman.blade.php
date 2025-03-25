<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSTAKALAYA</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <?php
    session_start();

    // Cek apakah pengguna sudah login
    if (empty($_SESSION['role'])) {
        header("Location: ../index.php?pesan=gagal");
        exit();
    }
    ?>
    <?php include 'index.php'; ?>
    
    <div class="ml-64 mt-16 p-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-semibold mb-2">
                <i class="fas fa-money-check mr-2"></i> Data Peminjaman
            </h3>
            <!-- Tambahkan tombol export -->
            <div class="mb-4 flex space-x-2">
                <a href="kelola/export_excel.php" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md inline-flex items-center">
                    <i class="fas fa-file-excel mr-2"></i> Export Excel
                </a>
                <a href="kelola/export_pdf.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md inline-flex items-center">
                    <i class="fas fa-file-pdf mr-2"></i> Export PDF
                </a>
            </div>
            <hr class="mb-4">
            
            <!-- Modal Sections -->
            <?php include 'modal/modal_edit_peminjaman.php'; ?>
            <?php include 'modal/modal_hapus_peminjaman.php'; ?>
            
            <!-- Responsive Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border p-2 text-left">NO</th>
                            <th class="border p-2 text-left">ID</th>
                            <th class="border p-2 text-left">NIS</th>
                            <th class="border p-2 text-left">NAMA SISWA</th>
                            <th class="border p-2 text-left">JUDUL BUKU</th>
                            <th class="border p-2 text-left">TANGGAL PEMINJAMAN</th>
                            <th class="border p-2 text-left">TANGGAL PENGEMBALIAN</th>
                            <th class="border p-2 text-left">STATUS</th>
                            <th class="border p-2 text-left">DENDA</th>
                            <th class="border p-2 text-left">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman");
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr class="hover:bg-gray-50">
                                <td class="border p-2"><?= $no++ ?></td>
                                <td class="border p-2"><?= $data['id_peminjaman'] ?></td>
                                <td class="border p-2"><?= $data['nis'] ?></td>
                                <td class="border p-2"><?= $data['nama_siswa'] ?></td>
                                <td class="border p-2"><?= $data['judul_buku'] ?></td>
                                <td class="border p-2"><?= $data['tanggal_peminjaman'] ?></td>
                                <td class="border p-2"><?= $data['tanggal_pengembalian'] ?></td>
                                <td class="border p-2"><?= $data['status_peminjaman'] ?></td>
                                <td class="border p-2"><?= $data['denda'] ?></td>
                                <td class="border p-2">
                                    <div class="flex flex-col md:flex-row md:space-x-2 space-y-2 md:space-y-0">
                                        <button class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-md text-sm flex items-center edit-button"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editDataModal"
                                            data-id_peminjaman="<?= $data['id_peminjaman'] ?>"
                                            data-nis="<?= $data['nis'] ?>"
                                            data-nama_siswa="<?= $data['nama_siswa'] ?>"
                                            data-judul_buku="<?= $data['judul_buku'] ?>"
                                            data-tanggal_peminjaman="<?= $data['tanggal_peminjaman'] ?>"
                                            data-tanggal_pengembalian="<?= $data['tanggal_pengembalian'] ?>"
                                            data-status_peminjaman="<?= $data['status_peminjaman'] ?>"
                                            data-denda="<?= $data['denda'] ?>">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                        </button>
                                        <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-sm flex items-center"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"
                                            data-id="<?= $data['id_peminjaman'] ?>">
                                            <i class="fas fa-trash-alt mr-1"></i> Hapus
                                        </button>
                                    </div>
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