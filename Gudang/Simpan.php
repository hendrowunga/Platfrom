<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table border="1">

        <h2>Daftar Stok Gadget</h2>
        <th>ID Produk</th>
        <th>Nama</th>
        <th>Tipe</th>
        <th>Jenis</th>
        <th>Plafrom</th>
        <th>Harga</th>
        <th>Jenis</th>
        </tr>

        <?php
        include "control.php";

        $sql = "SELECT * FROM stok_gudang";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "
                <tr>
                    <td>" . $row["produkid"] . "</td>
                    <td>" . $row["merek"] . "</td>
                    <td>" . $row["tipe"] . "</td>
                    <td>" . $row["jenis"] . "</td>
                    <td>" . $row["platform"] . "</td>
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
    <a href="form.php">Kembali</a>
</body>

</html>