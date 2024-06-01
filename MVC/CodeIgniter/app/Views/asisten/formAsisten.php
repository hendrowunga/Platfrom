<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>FORM PENDAFTARAN</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <h1>FORM PENDAFTARAN</h1>
    <form action="/asisten/simpan" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">NIM</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nim">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="nama">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label">PRAKTIKUM</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" name="praktikum">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput4" class="form-label">IPK</label>
            <input type="text" class="form-control" id="formGroupExampleInput4" name="ipk">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
</body>

</html>