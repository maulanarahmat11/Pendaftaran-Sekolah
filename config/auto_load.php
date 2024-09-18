<?php

session_start();

include('koneksi.php');

$base_url = "http://localhost/pendaftaran";

// DISINI MUNGKIN ADA YANG ERORR
$uri_segment = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// var_dump($uri_segment);

if(isset($_SESSION['status']) && $_SESSION['status'] == 'login') {
    // Lanjut
    if($uri_segment[2] == $_SESSION['level']){
        // Lanjut
    } else {
        echo "Error: Forbidden !!!";
        echo "<br><br> <button type='button' onclick='history.back()'> Kembali </button>";
        die;
    }

}else {
    $_SESSION['login_error'] = "Silahkan untuk masuk kedalam sistem";
    header('location:'.$base_url . '/login.php');
}


?>
