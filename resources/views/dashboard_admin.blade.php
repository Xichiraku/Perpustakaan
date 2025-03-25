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
<html>

<head>
    <title>Admin - Pustakalaya</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <!-- Sidebar -->
    <nav class="fixed top-0 left-0 h-full w-48 bg-blue-500 text-white p-5 shadow-lg">
        <h2 class="text-lg font-bold mb-5">PUSTAKALAYA</h2>
        <ul>
            <li class="mb-2"><a href="home.php" class="block p-2 rounded hover:bg-blue-700">Dashboard</a></li>
            <li class="mb-2">
                <button class="block w-full text-left p-2 rounded hover:bg-blue-700" onclick="toggleDropdown()">
                    Manajemen
                </button>
                <ul id="dropdownMenu" class="hidden pl-4">
                    <li><a href="petugas.php" class="block p-2 hover:bg-blue-600">Daftar Petugas</a></li>
                    <li><a href="siswa.php" class="block p-2 hover:bg-blue-600">Daftar Siswa</a></li>
                    <li><a href="buku.php" class="block p-2 hover:bg-blue-600">Daftar Buku</a></li>
                    <li><a href="landingpage.php" class="block p-2 hover:bg-blue-600">Landing Page</a></li>
                </ul>
            </li>
            <li class="mb-2"><a href="user.php" class="block p-2 rounded hover:bg-blue-700">User</a></li>
        </ul>
    </nav>
    
    <!-- Navbar -->
    <nav class="fixed top-0 left-48 right-0 bg-white shadow-md p-4 flex justify-between">
        <span class="font-bold">Admin Panel</span>
        <button data-modal-target="logoutModal" class="text-red-600">Logout</button>
    </nav>
    
    <!-- Logout Modal -->
    <div id="logoutModal" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded shadow-lg text-center">
            <h2 class="text-lg font-bold">Pustakalaya</h2>
            <p class="my-4">Apakah Anda yakin ingin keluar?</p>
            <div class="flex justify-center gap-4">
                <button class="px-4 py-2 bg-gray-300 rounded" onclick="toggleModal(false)">Batal</button>
                <a href="../logout.php" class="px-4 py-2 bg-red-600 text-white rounded">Keluar</a>
            </div>
        </div>
    </div>
    
    <script>
        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        }
        function toggleModal(show) {
            document.getElementById("logoutModal").classList.toggle("hidden", !show);
        }
        document.querySelector("[data-modal-target]").addEventListener("click", () => toggleModal(true));
    </script>
</body>
</html>