<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "db_masjid";

$koneksi = mysqli_connect($host,$username,$password,$database);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}else{
    // echo "Koneksi berhasil";
}

?>

