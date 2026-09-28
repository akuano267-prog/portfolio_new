<?php
session_start();

// Belum login
if (!isset($_SESSION['username'])) {
    header("Location: login.php?pesan=belum_login");
    exit();
}

// Bukan admin
if ($_SESSION['role'] != 'admin') {
    header("Location: akses_ditolak.php");
    exit();
}
?>   