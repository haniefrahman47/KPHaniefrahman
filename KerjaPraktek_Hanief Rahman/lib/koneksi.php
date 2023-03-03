<?php 

$hostname = "localhost";
$username = "root";
$pass     = "";
$database_name = "kp_inventory";
$koneksi  =  mysqli_connect($hostname, $username, $pass, $database_name);

if ($koneksi) {
//echo password_hash(PASSWORD_DEFAULT);
} else {
    echo "koneksi gagal";
}

?>