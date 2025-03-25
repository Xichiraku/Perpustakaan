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
    <title>PUSTAKALAYA</title>
    <link rel="shortcut icon" type="image/png" href="../image/login.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />
    <style>
        .card {
            font-[normal] not-italic;
            mt-[20px];
            w-[95%];
            ml-auto;
            mr-auto;
            bg-[white];
            border-[none];
            /* Menghilangkan border jika ada */
            border-radius: 10px;
            /* Menambahkan sudut melengkung */
            padding: 20px;
            /* Menambahkan padding untuk konten */
        }

        .profile-img {
            w-[155px]; 
            h-[155px];
            object-cover mt-[40px];
        }
    </style>
</head>

<body>
    <?php include 'index.php'; ?>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title itim-regular"> Selamat Datang di Pustakalaya <?php echo $_SESSION['username']; ?>!</h5>
            <p class="text-muted">
                Temukan buku favoritmu, perluas wawasan, dan jadilah pembelajar yang inspiratif. Yuk, mulai jelajahi! 📚✨
            </p>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <?php
            include '../koneksi.php';

            // Query untuk mendapatkan data siswa berdasarkan username yang login
            $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama = '$username'");

            // Check if there are results
            if (mysqli_num_rows($query) > 0) {
                // Display student data if found
                $data = mysqli_fetch_assoc($query);
            ?>
                <!-- Foto Siswa -->
                <div class="col-md-4 text-center">
                    <img src="../image/ppabu.jpg" alt="Foto Siswa" class="img-thumbnail rounded-circle profile-img">
                    <h5 class="mt-3"><?php echo isset($data['nama']) ? $data['nama'] : 'Data not found'; ?></h5>
                </div>
                <!-- Biodata Petugas -->
                <div class="col-md-8">
                    <h4>Biodata Siswa</h4>
                    <table class="table table-striped table-hover table-bordered table-mobile-stack mt-3">
                        <tbody>
                            <tr>
                                <th>NIS</th>
                                <td><?php echo isset($data['nis']) ? $data['nis'] : 'Data not found'; ?></td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td><?php echo isset($data['nama']) ? $data['nama'] : 'Data not found'; ?></td>
                            </tr>
                            <tr>
                                <th>Kelamin</th>
                                <td><?php echo isset($data['kelamin']) ? $data['kelamin'] : 'Data not found'; ?></td>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <td><?php echo isset($data['kelas']) ? $data['kelas'] : 'Data not found'; ?></td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td><?php echo isset($data['nohp']) ? $data['nohp'] : 'Data not found'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php
            } else {
                // Display message if no student data found
                echo "<div class='col-12 text-center'><h4>Data Siswa Tidak Ditemukan</h4></div>";
            }
            ?>
        </div>
    </div>

    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
</body>

</html>
