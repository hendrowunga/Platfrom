<?php
session_start();
if (isset($_SESSION['visit'])) {
    header('location:Login.php');
}
?>
<!DOCTYPE html>
<html>

<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
        }

        h2,
        h3 {
            color: #2c3e50;
        }

        fieldset {
            border: 2px solid #2980b9;
            border-radius: 8px;
            padding: 20px;
            background-color: #FFFFFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        legend {
            background-color: #2980b9;
            color: #FFFFFF;
            padding: 5px 10px;
            border-radius: 4px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        label {
            color: #34495e;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #2980b9;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #2c3e50;
        }
    </style>
</head>

<body>
    <div class="center">
        <title>Pilih Barang</title>
        <h2>
            Selamat Datang,
            <u>
                <?php echo $_SESSION['visit'] ?>
            </u>
        </h2>
        <p>
            [ <a class="logout" , href="logout.php">Logout</a>]
        </p>
    </div>

    <form>
        <fieldset>
            <legend>Pilih Barang</legend>

            <h3>Makanan Minuman:</h3>
            <input type="checkbox" id="roti" name="makanan" value="Roti">
            <label for="roti">Roti</label><br>
            <input type="checkbox" id="kopi" name="makanan" value="Kopi">
            <label for="kopi">Kopi</label><br>
            <input type="checkbox" id="susu" name="makanan" value="Susu">
            <label for="susu">Susu</label><br>
            <input type="checkbox" id="bakso" name="makanan" value="Bakso">
            <label for="bakso">Bakso</label><br><br>

            <h3>Terlektas Mandi:</h3>
            <input type="checkbox" id="sabungel" name="terlektas" value="Sabun Gel">
            <label for="sabungel">Sabun Gel</label><br>
            <input type="checkbox" id="sersing" name="terlektas" value="Sikat Gigi">
            <label for="sersing">Sikat Gigi</label><br>
            <input type="checkbox" id="sabcair" name="terlektas" value="Sabun Cair">
            <label for="sabcair">Sabun Cair</label><br>
            <input type="checkbox" id="shampo" name="terlektas" value="Shampoo">
            <label for="shampo">Shampoo</label><br><br>

            <h3>Alat Tulis:</h3>
            <input type="checkbox" id="pulpen" name="alattulis" value="Pulpen">
            <label for="pulpen">Pulpen</label><br>
            <input type="checkbox" id="penghapus" name="alattulis" value="Penghapus">
            <label for="penghapus">Penghapus</label><br>
            <input type="checkbox" id="penggaris" name="alattulis" value="Penggaris">
            <label for="penggaris">Penggaris</label><br>
            <input type="checkbox" id="bkmewarna" name="alattulis" value="Buku Mewarna">
            <label for="bkmewarna">Buku Mewarna</label><br>
            <input type="checkbox" id="pensils" name="alattulis" value="Pensil SV">
            <label for="pensils">Pensil SV</label>
        </fieldset>
        <br>
        <input type="submit" value="Masukkan ke Keranjang">
        <input type="reset" value="Ubat Keranjang">
    </form>

</body>

</html>