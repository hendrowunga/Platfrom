<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <title>Edit Asisten</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <h1>Edit Asisten</h1>
    <form action="/asisten/update" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="nim" value="<?= esc($asisten['nim']) ?>">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">NIM</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="nim" value="<?= esc($asisten['nim']) ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NAMA</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="nama" value="<?= esc($asisten['nama']) ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput3" class="form-label">PRAKTIKUM</label>
            <input type="text" class="form-control" id="formGroupExampleInput3" name="praktikum" value="<?= esc($asisten['praktikum']) ?>">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput4" class="form-label">IPK</label>
            <input type="text" class="form-control" id="formGroupExampleInput4" name="ipk" value="<?= esc($asisten['ipk']) ?>">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>

</body>

</html>