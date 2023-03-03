<?php
include 'lib/koneksi.php';
$tgl    =date("Y-m-d");
$inv = $_GET['id']
?>



<!DOCTYPE html>
<html>
<head>
	<title>LAPORAN DATA INVOICE</title>
</head>
<body>

	<center>
    <img src="assets/img/gambar1.jpg" width="10%">
    <h3>PT. Multiban Otoservis</h3>
	</center>

    <table width="100%" border="1" cellpadding="1" cellspacing="0">
	<tr>
	<td colspan="1" align="center" style="font-size:18px"><h4>INVOICE</h4></td>
	</tr>
	<tr>
	<td colspan="2">
	<table width="100%" cellpadding="5">
	<tr>
	<td width="65%">
	Kpd,<br />
	<b>PENERIMA (TAGIHAN)</b><br />
    <?php 
        $id1 = $_GET['id'];
        $sql = mysqli_query($koneksi, "SELECT * from `tbl_invoice` INNER JOIN tbl_pelanggan ON tbl_invoice.pelanggan = tbl_pelanggan.id_pelanggan WHERE id_invoice = $id1");
        // "SELECT * FROM `tbl_detail_transaksi` INNER JOIN tbl_biaya ON tbl_detail_transaksi.id_biaya = tbl_biaya.id WHERE id_transaksi = '$_GET[id_transaksi]'");
                while($data = mysqli_fetch_array($sql)) {
                    ?>
                    <label> Pelanggan : <?php echo $data['nama']; ?> </label>  <br />
                    <label>Alamat Tagihan : <?php echo $data['alamat']; ?> </label>
                    <!-- <label>Alamat Tagihan : </label>      -->

                    
                    <?php
                }
		?>
        
    
            <?php
                if (!isset($_GET['id']) ||$_GET['id'] == '') {
                  die('id null');
                }

                $id = $_GET['id'];
                $get_invoice = $koneksi->query("SELECT * FROM tbl_invoice where id_invoice = '$id'");

                $get_invoice = $get_invoice->fetch_assoc();
                ?>
     	<td width="35%">         
             <label>	Nomer Invoice   : INV-<?php echo $get_invoice['no_invoice']; ?> <br /></label>
             <label>Tanggal Invoice : <?php echo $get_invoice['tanggal']; ?> <br /></label>
             <label>Tenggat : &nbsp;&nbsp;&nbsp;<?php echo $get_invoice['tenggat']; ?></label>
            </td>



	<table border="1" style="width: 100%" cellpadding="3" cellspacing="2">
		<tr>
                <tr>
                    <th>No.</th>
                    <th>No.Barang</th>
                    <th>Barang</th>
                    <th>Qty</th>
                    <th>berat</th>
                    <th>Harga/Brg</th>
                </tr>
		</tr>
                  <?php 
                    $idorder = $get_invoice['id_order'];
                    $id2 = $_GET['id'];
                    $invoice = mysqli_query($koneksi, "SELECT * from `tbl_order` INNER JOIN tbl_barang ON tbl_order.id_barang = tbl_barang.id_barang WHERE id_order = $idorder");
                    $no = 1;
                              
                    while($data = mysqli_fetch_array($invoice)){
                      ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td align="center"><?php echo $data['no_barang']; ?></td>
                        <td align="center"><?php echo $data['nm_barang']; ?></td>
                        <td align="center"><?php echo $data['qty']; ?></td>
                        <td align="center"><?php echo $data['berat']; ?></td>
                        <td align="center">Rp.<?php echo $data['harga']; ?></td>
                    </tr>
                    <?php 
                }
        $sql = mysqli_query($koneksi, "SELECT * FROM tbl_invoice WHERE id_invoice='$inv'");
                while($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td colspan="5" align="center"><b>Total Amount</b></td>
                            <td  align="center"><b>Rp. <?php echo $data['total_amount'];?></b></td>
                        </tr>
                    <?php
                }
		?>
        
	</table>

	<script>
		;
	</script>
    &nbsp;&nbsp;<center><i><b>Informasi </b> Data per Tanggal : </i><b><?php echo $tgl?></b></center>
</body>
</html>