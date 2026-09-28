<?php
include "cek_session.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
</head>
<body>

<h1>Profil Pengguna</h1>

<p>Username: <?php echo $_SESSION['username']; ?></p>
<p>Role: <?php echo $_SESSION['role']; ?></p>

<a href="dashboard.php">Kembali ke Dashboard</a>
<br>
<a href="logout.php">Logout</a>

</body>
</html>