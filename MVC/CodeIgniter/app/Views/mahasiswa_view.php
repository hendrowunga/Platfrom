<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title> <!-- Menampilkan judul halaman -->
    . <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #000;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
    </tr>
</head>

<body>
    <h1><?= $judul ?></h1> <!-- Menampilkan judul halaman -->
    <table>
        <tr>
            <td>NIM</td> <!-- Header kolom untuk NIM -->
            <td>Nama</td> <!-- Header kolom untuk Nama  -->
        </tr>

        <?php if (!empty($daftarMhs) && is_array($daftarMhs)) : ?>
        <!-- Memeriksa apakah $daftarMhs tidak kosong dan merupakan array -->
        <?php foreach ($daftarMhs as $mhs) : ?>
        <!-- Memulai loop untuk setiap elemen dalam $daftarMhs ]-->
        <tr>
            <td><?= esc($mhs['NIM']) ?></td> <!-- Menampilkan NIM mahasiswa dengan fungsi esc() untuk sanitasi-->
            <td><?= esc($mhs['NAMA']) ?></td> <!-- Menampilkan Nama mahasiswa dengan fungsi esc() untuk sanitasi-->

        </tr>
        <?php endforeach ?>
        <!--- Akhir loop foreach -->
        <?php else : ?>
        <!-- Kondisi jika $daftarMhs kosong atau bukan array -->
        <tr>
            <td colspan="2">Kosong</td> <!-- Menampilkan pesan 'Kosong' jika tidak ada data -->
        </tr>
        <?php endif ?>
        <!-- Akhir dari kondisi if -->
    </table>
</body>

</html>