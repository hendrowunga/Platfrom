<?php
session_start();
$user = "admin@gmail.com";
$pass = "123";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $user || $password == $pass) {
    header('location:pilihbarang.php');
} else {
    header('location:login-false.php');
}