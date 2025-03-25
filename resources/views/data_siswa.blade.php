<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Cek apakah pengguna sudah login
if (empty($_SESSION['role'])) {
    header("Location: ../index.php?pesan=gagal");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSTAKALAYA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            @apply flex flex-wrap;
        }

        /* Card area for main content */
        .content {
            @apply flex-1 transition-[margin-left] duration-[0.3s] ease-[ease] ml-[200px] mt-[70px] p-5;
        }

        /* Responsive Table */
        @media (max-wid_userth: 768px) {
            .content {
                @apply ml-0 mt-[50px];
            }

            .table-responsive {
                @apply text-[0.9rem];
            }

            .action-buttons {
                @apply flex flex-col gap-[5px];
            }

            .action-buttons .btn {
                @apply mb-[3px];
            }
        }

        /* Action Buttons Styling */
        .action-buttons {
            @apply flex gap-[5px] justify-center;
        }

        /* Hover Effects */
        .table-hover tbody tr:hover {
            @apply bg-[rgba(0, 0, 0, 0.075)];
        }
    </style>
</head>

<body>
    <?php include 'index.php'; ?>
    <div class="content">
        <div class="container-fluid">
            <h3><i class="fas fa-user-graduate me-2"></i> Daftar Siswa</h3>
            <hr>

            <!-- Tambah Data Button -->
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                <i class="fas fa-plus-circle me-2"></i>TAMBAH DATA SISWA
            </button>

            <!-- Modal Sections -->
            <?php include 'modal/modal_tambah_siswa.php'; ?>
            <?php include 'modal/modal_edit_siswa.php'; ?>
            <?php include 'modal/modal_hapus_siswa.php'; ?>

            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-mobile-stack">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIS</th>
                            <th>NAMA SISWA</th>
                            <th>KELAMIN</th>
                            <th>KELAS</th>
                            <th>NO HP</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
include '../koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM siswa");
$no = 1;
while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td data-label="NO"><?= $no++ ?></td>
                            <td data-label="NIS"><?= $data['nis'] ?></td>
                            <td data-label="NAMA SISWA"><?= $data['nama'] ?></td>
                            <td data-label="KELAMIN"><?= $data['kelamin'] ?></td>
                            <td data-label="KELAS"><?= $data['kelas'] ?></td>
                            <td data-label="NO HP"><?= $data['nohp'] ?></td>
                            <td data-label="AKSI" class="action-buttons">
                                <button class="btn btn-success btn-sm edit-button" data-bs-toggle="modal"
                                    data-bs-target="#editDataModal" data-nis="<?= $data['nis'] ?>"
                                    data-nama="<?= $data['nama'] ?>" data-kelamin="<?= $data['kelamin'] ?>"
                                    data-kelas="<?= $data['kelas'] ?>" data-nohp="<?= $data['nohp'] ?>">
                                    <i class="fas fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal" data-id="<?= $data['nis'] ?>">
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

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>