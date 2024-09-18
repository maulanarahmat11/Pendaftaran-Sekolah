<?php

// Tabel Pendaftar
$all_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id AND nilai.status = 0");

// cek hasil
if(!$all_pendaftar){
    die('Query Error : '. mysqli_error($koneksi));
}

// Jumlah Pendaftar
$jml_pendaftar = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id");

// cek hasil
if(!$jml_pendaftar){
    die('Query Error : '. mysqli_error($koneksi));
}

// Jumlah Lolos
$jml_lolos = mysqli_query($koneksi, "SELECT * FROM pendaftar, nilai WHERE pendaftar.id = nilai.pendaftar_id AND nilai.status = 1");

// cek hasil
if(!$jml_lolos){
    die('Query Error : '. mysqli_error($koneksi));
}

?>