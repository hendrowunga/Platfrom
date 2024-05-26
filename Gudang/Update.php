<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Update Data Barang</h2>

    <form method="post" action="Simpan.php">
        <table border="1" style="border-collapse:collapse">
            <tr bgcolor="#eee">
                <th width="50">Produk ID</th>
                <th width="200">Merek</th>
                <th width="100">Tipe</th>
                <th width="100">Jenis</th>
                <th width="100">Platfrom</th>
                <th width="100">Harga</th>
                <th width="100">Jumlah</th>
            </tr>


        </table>

        <input type="hidden" name="jum" value="<?php echo $jum; ?>">

        <input type="submit" name="proses" value="Simpan" style="margin-top:5px">
        <input type="button" value="Kembali" onclick="location.href='Simpan.php';">

    </form>




</body>

</html>