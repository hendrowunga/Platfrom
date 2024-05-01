<?php
// Memulai Session,lalu session adalah cara menyimpan informasi di server yang dapat diaksess diseluruh halaman web dalam satu satu situs web.
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Sesssion</title>
</head>

<body>
    <?php
    $_SESSION['pengguna'] = "Joko Sembung"; //Membuat variabel session
    echo "<h1> Selamat,variabel session sudah terbentuk</h1>";
    ?>
</body>

</html>