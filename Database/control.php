<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";
//Membuat koneksi ke databese 'lgudang' dengan memasukan 'servername'.'username',dan 'password'
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_errno) { // Jika koneksi error akan menampikan
    die("Connecton Failed: " . $conn->connect_error);
}
echo "Connected successfully";