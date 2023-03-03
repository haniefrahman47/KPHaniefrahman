<?php
session_start();
include "../lib/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$sql      = $koneksi->query("select * from user where username = '$username'");
$row      = $sql->num_rows;
$user     = $sql->fetch_array();

if($row < 1){
    $get  = "User tidak ditemukan";
    header("Location: ../login.php?login=$get");
    die();  
}


if(password_verify($password, $user['password']) ){
    $_SESSION['user_login_invoice']= $user['username'];
    $_SESSION['level'] = $user['level'];
    // $_SESSION['pengguna']=$resl['username']; // Membuat Sesi/session
    // $_SESSION['akses'] = $resl['akses'];

    header("Location: ../index.php");
    die();  
}else{
    $get = "Password salah";
    header("Location: ../login.php?login=$get");
    die();  
}

?>