<?php
include "cek_session.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Dashboard</h1>

<p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>

<a href="profil.php">Profil</a>
<br>
<a href="logout.php">Logout</a>

</body>
</html>