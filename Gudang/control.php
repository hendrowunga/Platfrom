<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";
//Membuat koneksi ke database 'gudang' dengan menggunakan 'servername', 'username', dan 'password'
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) { // Jika koneksi error akan menampilkan
    die("Connection Failed: " . $conn->connect_error);
}

// Inisialisasi variabel untuk menghindari warning variabel tidak terdefinisi
$produkid = isset($_POST['produkid']) ? $_POST['produkid'] : '';
$merek = isset($_POST['merek']) ? $_POST['merek'] : '';
$tipe = isset($_POST['tipe']) ? $_POST['tipe'] : '';
$jenis = isset($_POST['jenis']) ? $_POST['jenis'] : '';
$platform = isset($_POST['platform']) ? $_POST['platform'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';

// Periksa apakah formulir dikirim
if (isset($_POST['btn_simpan'])) {
    // Lakukan penyisipan data hanya jika formulir dikirim
    $sql = "INSERT INTO stok_gudang (produkid, merek, tipe, jenis, platform, harga, jumlah) VALUES ('$produkid', '$merek', '$tipe', '$jenis', '$platform', '$harga', '$jumlah')";

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}