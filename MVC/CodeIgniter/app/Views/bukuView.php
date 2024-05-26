<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<body>
    <h1>INFO BUKU</h1>
    <table border="1">
        <tr>

            <td>Pengarang</td>
            <td>

                <?= $author; ?>
                <!-- Menampilkan nilai variabel PHP $author -->
            </td>
        </tr>
        <tr>

            <td>Judul</td>
            <td>
                <?= $title ?>
                <!-- Menampilkan nilai variabel PHP $title -->
            </td>
        </tr>
    </table>
</body>

</html>