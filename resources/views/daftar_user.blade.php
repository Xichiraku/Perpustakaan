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
    <meta name="viewport" content="wid_userth=device-wid_userth, initial-scale=1.0">
    <title>PUSTAKALAYA</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
        }

        /* Card area for main content */
        .content {
            margin-left: 200px;
            margin-top: 70px;
            padding: 20px;
            flex: 1;
            transition: margin-left 0.3s ease;
        }

        /* Responsive Table */
        @media (max-wid_userth: 768px) {
            .content {
                margin-left: 0;
                margin-top: 50px;
            }

            .table-responsive {
                font-size: 0.9rem;
            }

            .action-buttons {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .action-buttons .btn {
                margin-bottom: 3px;
            }
        }

        /* Action Buttons Styling */
        .action-buttons {
            display: flex;
            gap: 5px;
            justify-content: center;
        }

        /* Hover Effects */
        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }
    </style>
</head>

<body>
    <?php include 'index.php'; ?>
    <div class="content">
        <div class="container-fluid">
            <h3><i class="fas fa-user-alt me-2"></i> Daftar User</h3>
            <hr>

            <!-- Tambah Data Button -->
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                <i class="fas fa-plus-circle me-2"></i>TAMBAH DATA USER
            </button>

            <!-- Modal Sections -->
            <?php include 'modal/modal_tambah_user.php'; ?>
            <?php include 'modal/modal_edit_user.php'; ?>
            <?php include 'modal/modal_hapus_user.php'; ?>

            <!-- Responsive Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-mobile-stack">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID USER</th>
                            <th>USERNAME</th>
                            <th>ROLE</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM pengguna");
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr>
                                <td data-label="NO"><?= $no++ ?></td>
                                <td data-label="id_user"><?= $data['id_user'] ?></td>
                                <td data-label="username"><?= $data['username'] ?></td>
                                <td data-label="role"><?= $data['role'] ?></td>
                                <td data-label="AKSI" class="action-buttons">
                                    <button class="btn btn-success btn-sm edit-button"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editDataModal"
                                        data-id_user="<?= $data['id_user'] ?>"
                                        data-username="<?= $data['username'] ?>"
                                        data-role="<?= $data['role'] ?>">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-id_user="<?= $data['id_user'] ?>">
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