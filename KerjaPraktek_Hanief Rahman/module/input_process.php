<?php
include "../lib/koneksi.php";

if(isset($_POST['daftar'])){

	$nama			= $_POST['nama'];	
	$email			= $_POST['email'];	
	$username		= $_POST['username'];
	$password 		= PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);

	$input 			= mysqli_query($koneksi, "INSERT INTO user(nama,email,username,password) VALUES ('$nama','$email','$username', '$password')");
	if($input){
		$get = "Berhasil menambahkan data!";
		header("location:../page/user.php?input=berhasil");
	}else{
		$get = "Gagal menambahkan data!";		
		header("location:../page/user.php?input=gagal");
	}
}else{	
	echo '<script>window.history.back()</script>';
}
// ----------------------------------------------------------------------------------------------------------- bisa
if(isset($_POST['pelanggan'])){
	
	$npwp		= $_POST['npwp'];	
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	
	$telpon		= $_POST['telpon'];	
	

	$input 		= mysqli_query($koneksi, "INSERT INTO tbl_pelanggan VALUES(NULL, '$npwp', '$nama', '$alamat','$telpon')");
	if($input){
		$get = "Berhasil menambahkan data!";
		header("location:../page/pelanggan.php?input=berhasil");
	}else{
		$get = "Gagal menambahkan data!";		
		header("location:../page/pelanggan.php?input=gagal");
	}
}else{	
	echo '<script>window.history.back()</script>';
}
if(isset($_POST['pelanggan_baru'])){
	
	$npwp		= $_POST['npwp'];	
	$nama		= $_POST['nama'];	
	$alamat		= $_POST['alamat'];	
	$telpon		= $_POST['telpon'];	
	

	$input 		= mysqli_query($koneksi, "INSERT INTO tbl_pelanggan VALUES(NULL, '$npwp', '$nama', '$alamat','$telpon')");
	if($input){
		$get = "Berhasil menambahkan data!";
		header("location:../page2/pelanggan.php?input=berhasil");
	}else{
		$get = "Gagal menambahkan data!";		
		header("location:../page2/pelanggan.php?input=gagal");
	}
}else{	
	echo '<script>window.history.back()</script>';
}
// ----------------------------------------------------------------------------------------------------------- bisa
if(isset($_POST['barang'])){

	$nomer		= $_POST['no_barang'];
	$nama		= $_POST['nm_barang'];
	$jumlah		= $_POST['jumlah'];	
	$berat		= $_POST['berat'];	
	$harga		= $_POST['harga'];	
	
	$input 		= mysqli_query($koneksi, "INSERT INTO tbl_barang VALUES(NULL, '$nomer', '$nama', '$jumlah', '$berat', '$harga')");
	
	if($input){
		$get = "Berhasil menambahkan data!";
		header("location:../page/barang.php?input=berhasil");
	}else{
		$get = "Gagal menambahkan data!";		
		header("location:../page/barang.php?input=gagal");
	}
}else{	
	echo '<script>window.history.back()</script>';
}

if(isset($_POST['pengguna'])){

	$nama			= $_POST['nama'];	
	$email			= $_POST['email'];	
	$username		= $_POST['username'];
	$password 		= PASSWORD_HASH($_POST["password"], PASSWORD_DEFAULT);
	$level			= $_POST['level'] = "user";

	$input 			= mysqli_query($koneksi, "INSERT INTO user(nama,email,username,password,level) VALUES ('$nama','$email','$username', '$password','$level')");
	if($input){
		$get = "Berhasil menambahkan data!";
		header("location:../login.php?input=berhasil");
	}else{
		$get = "Gagal menambahkan data!";		
		header("location:../page2/daftar.php?input=gagal");
	}
}else{	
	echo '<script>window.history.back()</script>';
}
// -----------------------------------------------------------------------------------------------------------bisa
?>
