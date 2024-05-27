<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/submitMahasiswa" method="post">
        <?= csrf_field() ?>
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim">
        <br>
        <br>
        <label for="nama">NAMA</label>
        <input type="text" name="nama" id="nama">
        <br>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>