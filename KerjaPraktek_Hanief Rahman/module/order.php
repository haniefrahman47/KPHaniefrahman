<?php
include "../lib/koneksi.php";
if(isset($_POST['invoice'])){


	
	$no_invoice		= $_POST['no_invoice'];	
	$pelanggan		= $_POST['pelanggan'];	
	$tanggal		= $_POST['tanggal'];
	$tenggat		= $_POST['tenggat'];
	$total_amount	= $_POST['total_amount'];
	$catatan		= $_POST['catatan'];
	

	
	$order = $_POST['order'];
	$catatan		= $_POST['catatan'];	

	$id_order = ''.date('Ymdhis').rand(111,999);



	for ($i=1; $i <count($order); $i++) { 

		if($order[$i]['qty'] != ''){
			$barang = $order[$i]['barang'];
			$qty = $order[$i]['qty'];
			$amount = $order[$i]['amount'];

			$input 		= mysqli_query($koneksi, "INSERT INTO tbl_order VALUES(NULL, '$id_order', '$barang', '$qty', '$amount')");
	
		}
	}

	$input2 		= mysqli_query($koneksi, "INSERT INTO tbl_invoice VALUES(NULL, '$no_invoice', '$pelanggan', '$tanggal', '$tenggat','$id_order', '$total_amount', '$catatan')");
	if($input && $input2){
		$get = "Berhasil menambahkan data!";
		header("location:../page2/invoice.php?input=berhasil");
	}else{
		$get = "Gagal menambahkan data!";		
		header("location:../page2/invoice.php?input=gagal");
	}
}else{	
	echo '<script>window.history.back()</script>';
}
// --------------------------------------------------------------------------------------------------------------------------------------------bisa
// --------------------------------------------------------------------------------------------------------------------------------------------
?>