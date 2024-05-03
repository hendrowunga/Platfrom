<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gudang";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Field :" . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gudang</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Daftar Stok Gadget</h1>
    <table>
        <tr>
            <th><u>ID Produk</u></th>
            <th><u>Nama</u></th>
            <th><u>Tipe</u></th>
            <th><u>Jenis</u></th>
            <th><u>Platfrom</u></th>
            <th><u>Harga</u></th>
            <th><u>Jumlah</u></th>
        </tr>

        <?php
        $sql = "SELECT * FROM status_gudang";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $row["produkid"] . "</td>
                    <td>" . $row["merek"] . "</td>
                    <td>" . $row["tipe"] . "</td>
                    <td>" . $row["jenis"] . "</td>
                    <td>" . $row["platfrom"] . "</td>
                    <td>" . $row["harga"] . "</td>
                    <td>" . $row["jumlah"] . "</td>
                </tr>
            
            ";
            }
        } else {
            echo "0 results";
        }
        $conn->close();

        ?>
    </table>
    <a href="from.php">Kembali</a>



</body>

</html>