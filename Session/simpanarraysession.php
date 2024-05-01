<?php
session_start(); // Muali session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menyimpan array ke dalam Session</title>
</head>

<body>
    <?php
    // Membuat array bernama daftarBuah
    $daftarBuah = array("Apel", "Jeruk", "Semangka", "Jambu", "Mangga", "Durian");
    // Menyimpan array dalam sessi dan digunakan untuk menyimpan informasi yang ingin dipertahankan di beberapa halamaan atau sessi pengguna
    $_SESSION['listBuah'] = $daftarBuah;
    echo "<h1>Daftar Buah sudah disimpan ke dalam Session</h1>"; // Mencetak atau diibartkan sebagai notifikasi pesan sukses
    ?>
</body>

</html>