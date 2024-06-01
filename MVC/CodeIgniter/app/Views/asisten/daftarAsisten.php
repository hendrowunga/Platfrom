<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Asisten Praktikum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>Daftar Asisten Praktikum</h2>
        <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('message') ?>
        </div>
        <?php endif; ?>
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Praktikum</th>
                    <th>IPK</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($asisten) && !empty($asisten)) : ?>
                <?php foreach ($asisten as $asist) : ?>
                <tr>
                    <td><?= esc($asist['nim']) ?></td>
                    <td><?= esc($asist['nama']) ?></td>
                    <td><?= esc($asist['praktikum']) ?></td>
                    <td><?= esc($asist['ipk']) ?></td>
                    <td>
                        <a href="/asisten/formEdit/<?= esc($asist['nim']) ?>" class="btn btn-success btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="/asisten/formHapus/<?= esc($asist['nim']) ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this item?');">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else : ?>
                <tr>
                    <td colspan="5">Tidak ada data asisten</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>