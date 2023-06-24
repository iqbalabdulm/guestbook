<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
$database = "guestbook";

// koneksi database
$con = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$con) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>