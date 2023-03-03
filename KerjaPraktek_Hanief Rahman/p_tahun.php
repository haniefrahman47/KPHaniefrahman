<?php
include 'lib/koneksi.php';
$tgl    =date("Y-m-d");
?>



<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DATA INVOICE</title>
</head>
<body>

	<center>
    <img src="assets/img/logo.png" width="10%">
    <h3>PT. Multiban Otoservis</h3>
	</center>

    <table width="100%" border="1" cellpadding="1" cellspacing="0">
	<tr>
	<td colspan="1" align="center" style="font-size:18px"><h4>LAPORAN TAHUNAN</h4></td>
	</tr>
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
     	<td width="35%">         
             <label>Tanggal Invoice : <?php echo $tgl?><br /></label>
            </td>



	<table border="1" style="width: 100%" cellpadding="3" cellspacing="2">
		<tr>
                <tr>
                    <th>No.</th>
                    <th>Inovoice</th>
                </tr>
		</tr>
                  <?php 

                    $invoice = mysqli_query($koneksi, "SELECT * from tbl_invoice");
                    $no = 1;
                              
                    while($data = mysqli_fetch_array($invoice)){
                      ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td align="center"><?php echo $data['no_invoice']; ?></td>
                    </tr>
                    <?php 
                }
        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_invoice");
                while($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td colspan="1" align="center"><b>Total</b></td>
                            <td  align="center"><b>Rp. <?php echo $data['total_amount'];?></b></td>
                        </tr>
                    <?php
                }
		?>
        
	</table>
<br>
	<script>
		;
	</script>
</body>
</html>