<?php
session_start();

if (isset($_GET['pesan']) && $_GET['pesan'] == 'belum_login') {
    echo "<p style='color:red;'>Silakan login terlebih dahulu.</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form action="proses_login.php" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>