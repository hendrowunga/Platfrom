<?php
session_start(); // Start session
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membaca Array dari dalam Session</title>
</head>

<body>
    <?php
    if (isset($_SESSION['listBuah'])) { // Memeriksa variabel sesi bernama "listBuah" ada ? Jika ada,..
        $daftarBuah = $_SESSION['listBuah']; // Code ini akan mengambilkan array dari sesi dan menetapkan ke variabel daftarBuah.

        echo "<h1>Daftar Buah</h1>"; // Judul daftar
        echo "<ol>"; // Mencetak daftar berurutan dan menampilkan item dalam berurutan bernomor,dengan perkondisian terpenuhi.
        foreach ($daftarBuah as $buah) { // Iterasi melalui Array dan Menampilkan daftar Buah yang dipesan.
            echo "<li>$buah</li>";
        }
        echo "</ol>"; // Menandai akhir dari daftar buah-buahan.
    }
    ?>
</body>

</html>