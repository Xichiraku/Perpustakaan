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
    <title>PUSTAKALAYA - Kategori Buku</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <style>
        .book-cover {
            max-width: 150px; /* Atur lebar maksimal sampul buku */
            height: auto;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <header class="bg-primary text-white py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1><a href="beranda.php" class="text-white" style="text-decoration: none;">PUSTAKALAYA</a></h1>
                </div>
                <div>
                    <nav>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="beranda.php">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white active" href="kategori.php">Kategori</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="koleksi.php">Koleksi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div>
                    </div>
            </div>
        </div>
    </header>

    <div class="container mt-4">
        <h2>Kategori Buku untuk Kelas 5 & 6</h2>
        <div class="row">
            <?php
            include '../koneksi.php';
            $jenis_buku_sd = [
                'Fiksi Anak',
                'Ilmu Pengetahuan Alam',
                'Ilmu Pengetahuan Sosial',
                'Matematika',
                'Cerita Rakyat',
                'Dongeng',
                'Komik Edukasi',
                'Biografi Tokoh',
                'Keterampilan',
            ];

            foreach ($jenis_buku_sd as $jenis) {
                // Query untuk mendapatkan buku berdasarkan jenis buku
                $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE jenis_buku = '$jenis' AND kelas_target IN ('5', '6') LIMIT 4");
                $jumlah_buku = mysqli_num_rows($query);

                if ($jumlah_buku > 0) {
            ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $jenis ?></h5>
                                <div class="row">
                                    <?php
                                    while ($data = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <div class="col-6">
                                            <img src="../image/<?= $data['gambar'] ?>" alt="<?= $data['judul_buku'] ?>" class="img-fluid book-cover">
                                            <p class="card-text small"><?= $data['judul_buku'] ?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <?php if ($jumlah_buku > 4) : ?>
                                    <a href="daftar_buku_per_kategori.php?kategori=<?= urlencode($jenis) ?>&kelas=5-6" class="btn btn-primary btn-sm">Lihat Semua</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>