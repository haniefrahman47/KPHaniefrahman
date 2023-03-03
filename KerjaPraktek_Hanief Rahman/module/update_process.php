<?php
include "../lib/koneksi.php";

if(isset($_POST['pelanggan'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $npwp = $_POST['npwp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];


$query=mysqli_query($koneksi, "UPDATE tbl_pelanggan SET npwp='$npwp' ,nama='$nama', alamat='$alamat', telpon='$telpon' WHERE id_pelanggan='$id_pelanggan'");
header("location:../page/pelanggan.php");
}
// -----------------------------------------------------------------------------------------------------------bisa
if(isset($_POST['barang'])){
    $id_barang = $_POST['id_barang'];
	$no_barang = $_POST['no_barang'];
	$nm_barang	= $_POST['nm_barang'];
	$jumlah = $_POST['jumlah'];
	$berat = $_POST['berat'];
	$harga = $_POST['harga'];

$query=mysqli_query($koneksi, "UPDATE tbl_barang SET no_barang='$no_barang' ,nm_barang='$nm_barang', jumlah='$jumlah',berat='$berat',harga='$harga' WHERE id_barang='$id_barang'");
header("location:../page/barang.php");
}
// -----------------------------------------------------------------------------------------------------------bisa
if(isset($_POST['user'])){
    $id_user = $_POST['id_user'];
    $nama1 = $_POST['nama'];
    $email = $_POST['email'];
    $username = $_POST['username'];
	$password = PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

$query=mysqli_query($koneksi, "UPDATE user SET nama='$nama1' ,email='$email', username='$username', password='$password' WHERE id_user='$id_user'");
header("location:../page/user.php");
}
// -----------------------------------------------------------------------------------------------------------bisa

?>