<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Data login contoh
if ($username == "admin" && $password == "12345") {

    $_SESSION['username'] = "admin";
    $_SESSION['role'] = "admin";

    header("Location: dashboard.php");
    exit();

} else {

    echo "Username atau password salah.";
    echo "<br><a href='login.php'>Kembali ke Login</a>";

}
?>