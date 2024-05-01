<?php
session_start(); // Memulai sesssion
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membaca Nilai Session</title>
</head>

<body>
    <?php
    if (isset($_SESSION['pengguna'])) { // Memeriksa apakah variabel bernama "pengguna" ada?
        echo "<h1> Selamat datang " . $_SESSION['pengguna'] . "</h1>"; // Mencetak nama pengguna jika dari session ini dengan perkondisian terpenuhi.
    }
    ?>
</body>

</html>