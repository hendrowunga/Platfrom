<?php
session_start();
$user = "admin";
$pass = "123";

$username = $_POST['username'];
$password = $_POST['password'];

if (($username == $user) and ($password == $pass)) {
    $_SESSION['visit'] = "Endos";
    header('location:pilih.php');
} else {
    header('location:gagallogin.php');
}