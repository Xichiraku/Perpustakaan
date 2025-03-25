<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Cek apakah pengguna sudah login
if (empty($_SESSION['role'])) {
    header("Location: ../index.php?pesan=gagal");
    exit();
}

// Mengambil nama siswa dari session (misal disimpan dengan key 'username')
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSTAKALAYA</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Menyertakan file index.php dan modal -->
    <?php include 'index.php'; ?>
    <?php include 'modal_hapus_peminjaman.php'; ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID</th>
                                <th>NIS</th>
                                <th>NAMA SISWA</th>
                                <th>ISBN</th>
                                <th>JUDUL BUKU</th>
                                <th>TANGGAL PEMINJAMAN</th>
                                <th>TANGGAL PENGEMBALIAN</th>
                                <th>STATUS</th>
                                <th>DENDA</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../koneksi.php';

                            // Query untuk mendapatkan data peminjaman berdasarkan nama siswa
                            $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE nama_siswa = '$username'");
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td data-label="id_peminjaman"><?= $data['id_peminjaman'] ?></td>
                                    <td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama_siswa'] ?></td>
                                    <td><?= $data['isbn'] ?></td>
                                    <td><?= $data['judul_buku'] ?></td>
                                    <td><?= $data['tanggal_peminjaman'] ?></td>
                                    <td><?= $data['tanggal_pengembalian'] ?></td>
                                    <td><?= $data['status_peminjaman'] ?></td>
                                    <td><?= $data['denda'] ?></td>
                                    <td>
                                        <button class="btn btn-danger btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteModal"
                                            data-id="<?= $data['id_peminjaman'] ?>">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>