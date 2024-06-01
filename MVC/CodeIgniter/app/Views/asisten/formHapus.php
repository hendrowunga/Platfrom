<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hapus Asisten</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <h1>Hapus Asisten</h1>
    <form action="/asisten/hapus" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">NIM</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nim" value="<?= esc($nim) ?>" readonly>
        </div>
        <div class="mb-3">
            <button class="btn btn-danger" type="submit">Hapus</button>
        </div>
    </form>
</body>

</html>