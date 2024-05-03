<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";
//Membuat koneksi ke databese 'lgudang' dengan memasukan 'servername'.'username',dan 'password'
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) { // Jika koneksi error akan menampikan
    die("Connecton Failed: " . $conn->connect_error);
}

$produkid = $_POST['produkid'];
$merek = $_POST['merek'];
$tipe = $_POST['tipe'];
$jenis = $_POST['jenis'];
$platfrom = $_POST['platfrom'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

if (isset($_POST['simpan_btn'])) { // Dijalankan jika user mengclick tombol 'Simpan'
    $sql = "INSERT INTO status_gudang (produkid, merek, tipe, jenis, platfrom, harga, jumlah) VALUES ('$produkid', '$merek','$tipe', '$jenis ', '$platfrom', '$harga', '$jumlah')";
    // Query yang digunakan untuk menginputkan data ke dalam table 'stok_gudang' dengan cara memanggil semua nama kolom
    // dan setiap kolom akan diisikan dengan nilai yang didapatkan dari form sebelumnya yang telah disimpan
    // ke dalam variable

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['update_btn'])) { // Dijalankan jika user mengclick tombol 'Update'
    $sql = "UPDATE status_gudang SET merek='$merek', tipe='$tipe', jenis='$jenis', platfrom='$platfrom', harga='$harga', jumlah='$jumlah' WHERE produkid='$produkid'";
    // Query yang digunakan untuk mengupdate data yang ada di table 'stok_gudang' dengan mencari data berdasarkan Primary Key
    // (produkid) dan mengganti semua datanya dengan nilai yang didapatkan dari form sebelumnya yang telah disimpan ke dalam variable

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif (isset($_POST['hapus_btn'])) { // Dijalankan jika user mengclick tombol 'Hapus'
    $sql = "DELETE FROM status_gudang WHERE produkid='$produkid'";
    // Query yang digunakan untuk menghapus data dari sebuah table dengan menggunakan produkid (Primary Key)

    if ($conn->query($sql) === FALSE) { // Ditampilkan jika query mengalami error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); // Menutup koneksi ke database

header("location:tampil.php"); // Mengembalikan user ke halaman 'tampil.php'