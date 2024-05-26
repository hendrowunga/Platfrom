<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Gudang</h1>
    <form id="updateForm" action="Simpan.php" method="POST">
        <table>
            <tr>
                <td>Produk ID</td>
                <td><input type="text" name="produkid"><a href="Simpan.php">Lihat Semua</a></td>
            </tr>

            <tr>
                <td>Merk</td>
                <td><input type="text" name="merek"></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td><input type="text" name="tipe"></td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>
                    <label for=""><input type="radio" name="jenis" value="Smartphone">Smartphone</label><br>
                    <label for=""><input type="radio" name="jenis" value="Tablet">Tablet</label>
                </td>
            </tr>
            <tr>
                <td>Platfrom</td>
                <td>
                    <select name="platform">
                        <option value="Android">Android</option>
                        <option value="iOS">iOS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan" name="btn_simpan">
                    <input type="submit" value="Update" name="btn-Update">
                    <input type="submit" value="Hapus" name="btn-Hapus">
                </td>
            </tr>

        </table>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('input[name="btn-Update"]').addEventListener('click', function(event) {
                event.preventDefault(); // prevent the default form submission
                document.getElementById('updateForm').action =
                    "Update.php"; // set action attribute to Update.php
                document.getElementById('updateForm').submit(); // submit the form
            });

            document.querySelector('input[name="btn-Hapus"]').addEventListener('click', function(event) {
                event.preventDefault(); // prevent the default form submission
                document.getElementById('updateForm').action =
                    "Hapus.php"; // set action attribute to Hapus.php
                document.getElementById('updateForm').submit(); // submit the form
            });
        });
    </script>
</body>

</html>