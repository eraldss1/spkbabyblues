-halaman1

<?php
$host = "localhost"; 
$user = "root";
$pass = "";
$db   = "babyblues";

$koneksi= mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die("Koneksi Gagal");
} else{
    echo "Koneksi Berhasil";
}

