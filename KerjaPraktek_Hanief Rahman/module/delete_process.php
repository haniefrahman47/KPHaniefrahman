<?php
include "../lib/koneksi.php";

$aksi = $_GET['aksi'];

if($aksi == 'user'){
    $id_user = $_GET['id'];
    $id_user = "DELETE from user where id_user='$id_user'";
    mysqli_query($koneksi, $id_user);
    header("location:../page/user.php"); 
}
// -----------------------------------------------------------------------------------------------------------
if($aksi == 'pelanggan'){
    $id_pelanggan = $_GET['id'];

    $id_pelanggan = "DELETE from tbl_pelanggan where id_pelanggan='$id_pelanggan'";
    mysqli_query($koneksi, $id_pelanggan);
    header("location:../page/pelanggan.php");
}
// -----------------------------------------------------------------------------------------------------------
if($aksi == 'barang'){
    $id_barang = $_GET['id'];

    $id_pelanggan = "DELETE from tbl_barang where id_barang='$id_barang'";
    mysqli_query($koneksi, $id_pelanggan);
    header("location:../page/barang.php");
}
// -----------------------------------------------------------------------------------------------------------
if($aksi == 'invoice'){
    $id_invoice = $_GET['id'];

    $id_invoice = "DELETE from tbl_invoice where id_invoice='$id_invoice'";
    mysqli_query($koneksi, $id_invoice);
    header("location:../page/invoice.php");
}
if($aksi == 'invoice'){
    $id_order = $_GET['id'];

    $id_invoice = "DELETE from tbl_order where id_order='$id_order'";
    mysqli_query($koneksi, $id_invoice);
    header("location:../page/invoice.php");
}
// -----------------------------------------------------------------------------------------------------------
?>