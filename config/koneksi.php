<?php

// $nama = "Maulana Rahmat";
// echo $nama;


$host = "localhost";
$username = "root";
$password = "";
$database = "pendaftaran";

$koneksi = mysqli_connect($host, $username, $password, $database);

if ($koneksi->connect_error) {
    echo "Koneksi Database Gagal: " . mysqli_connect_error();
    die;
} else {
    // echo "Koneksi Database Berhasil";
}

?>