<?php
include '../lib/koneksi.php';
if (isset($_POST['key'])) {
    $barang = $_POST['id'];

    $get_barang = mysqli_query($koneksi, "SELECT * from tbl_barang where id_barang = '$barang'");

    $get_barang = mysqli_fetch_assoc($get_barang);

    echo $get_barang['harga'];
}

?>