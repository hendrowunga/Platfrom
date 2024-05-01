<?php
session_start();

if (!isset($_SESSION['visit'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="center">
        <h1>Pilih Barang</h1>
        <h2>Selamat Datang,
            <u>
                <?php echo $_SESSION['visit'] ?>
            </u>
        </h2>
        <p>
            [ <a class="logout" href="logout.php">Logout</a> ]
        </p>
    </div>

    <div class="container">
        <form action="berhasilmenambah.php" method="post">
            <h3 class="center">Makanan Minuman</h3>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Gula"> Gula
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Teh"> Teh
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Kopi"> Kopi
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Susu"> Susu
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Biskuit"> Biskuit
            </label>

            <h3 class="center">Peralatan Mandi</h3>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Sikat Gigi"> Sikat Gigi
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Pasta Gigi"> Pasta Gigi
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Sabun"> Sabun
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Shampoo"> Shampoo
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Sabun Cuci Muka"> Sabun Cuci Muka
            </label>

            <h3 class="center">Alat Tulis</h3>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Pensil"> Pensil
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Penggaris"> Penggaris
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Penghapus"> Penghapus
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Ballpoint"> Ballpoint
            </label>
            <label class="checkbox-container">
                <input type="checkbox" name="barang[]" value="Kertas HVS"> Kertas HVS
            </label>

            <br>
            <div class="center">
                <input class="button" type="submit" value="Masukkan ke Keranjang">
                <br>
                <p>
                    [ <a href="keranjang.php">Lihat Keranjang</a> ]
                </p>
            </div>
        </form>
    </div>
</body>

</html>