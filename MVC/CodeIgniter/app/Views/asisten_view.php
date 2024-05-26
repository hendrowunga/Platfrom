<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($judul) ?></title> <!-- Manampilkan judul halaman-->
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h1><?= esc($judul) ?></h1> <!-- Manampilkan judul halaman -->
    <table>
        <thead>
            <tr>
                <th>NIM</th> <!-- Header kolom untuk NIM-->
                <th>Nama</th><!-- Header kolom untuk Nama-->
                <th>Praktikum</th><!-- Header kolom untuk Praktikum-->
                <th>IPK</th><!-- Header kolom untuk IPK-->
            </tr>
        </thead>
        <tbody>
            <!-- Memeriksa apakah $daftarAsisten tidak kosong dan merupakan array-->
            <?php if (!empty($daftarAsisten) && is_array($daftarAsisten)) : ?>
            <!-- Memulai loop untuk setiap elemen dalam $daftarAsisten-->
            <?php foreach ($daftarAsisten as $asisten) : ?>
            <tr>
                <td><?= esc($asisten['NIM']) ?></td>
                <!-- Menampikan NIM Asisten dengan fungsi esc()untuk sanitasi. Sanitasi adalah proses membersihkan atau memfilter inputan pengguna agar aman untuk digunakan dalam konteks tertentu, seperti penyimpanan ke database atau tampilan di halaman web.-->
                <!-- Fungsi dari esc adalah  mengonversi karakter-karakter khusus menjadi entitas HTML, sehingga mencegah karakter-karakter tersebut dieksekusi sebagai kode HTML atau skrip JavaScript.-->
                <td><?= esc($asisten['NAMA']) ?></td>
                <!-- Menampilkan NAMA Asisten dengan fungsi esc() untuk sanitasi. Sanitasi adalah proses membersihkan atau memfilter inputan pengguna agar aman untuk digunakan dalam konteks tertentu, seperti penyimpanan ke database atau tampilan di halaman web.-->
                <!-- Fungsi dari esc adalah  mengonversi karakter-karakter khusus menjadi entitas HTML, sehingga mencegah karakter-karakter tersebut dieksekusi sebagai kode HTML atau skrip JavaScript.-->

                <td><?= esc($asisten['PRAKTIKUM']) ?></td>

                <!-- Fungsi dari esc adalah  mengonversi karakter-karakter khusus menjadi entitas HTML, sehingga mencegah karakter-karakter tersebut dieksekusi sebagai kode HTML atau skrip JavaScript.-->
                <!-- Menampilkan PRAKTIKUM Asisten dengan fungsi esc() untuk sanitasi. Sanitasi adalah proses membersihkan atau memfilter inputan pengguna agar aman untuk digunakan dalam konteks tertentu, seperti penyimpanan ke database atau tampilan di halaman web.-->

                <!-- Fungsi dari esc adalah  mengonversi karakter-karakter khusus menjadi entitas HTML, sehingga mencegah karakter-karakter tersebut dieksekusi sebagai kode HTML atau skrip JavaScript.-->
                <td><?= esc($asisten['IPK']) ?></td>
                <!-- Menampilkan IPK Asisten dengan fungsi esc() untuk sanitasi. Sanitasi adalah proses membersihkan atau memfilter inputan pengguna agar aman untuk digunakan dalam konteks tertentu, seperti penyimpanan ke database atau tampilan di halaman web.-->
            </tr>
            <?php endforeach ?>
            <!-- Akhir loop foreach-->
            <?php else : ?>
            <!-- Kondisi jika $daftarAsisten kosong atau bukan array-->
            <tr>
                <td colspan="4">Kosong</td> <!-- Menampilkan pesan 'Kosong' jika tidak ada data-->
            </tr>
            <?php endif ?>
            <!-- Akhir dari kondisi if-->
        </tbody>
    </table>
</body>

</html>