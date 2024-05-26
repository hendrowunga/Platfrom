<?php
session_start();

if (!isset($_SESSION['visit'])) {
    header('location:Login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Commerce</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="center">
        <h1>Terima Kasih atas Kunjungannya</h1>
        <p>
            [ <a href="Login.php">Login</a> ]
        </p>
    </div>
    <?php
    session_destroy();
    ?>
</body>

</html>