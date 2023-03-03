<?php
	session_start();  
	include"../lib/koneksi.php";
$tgl    =date("d-m-Y");
$rand   = rand(10000, 50000);
  
	if(!isset($_SESSION['user_login_invoice'])){
        header("Location: login.php");
        die();  
    }else{
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Invoice</title>
      
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
          
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
          <link rel="stylesheet" href="../assets/css/style.css">
         
      
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
          <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
          <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>

          <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

          <style>
            span.select2-selection.select2-selection--single {
              height: 43px;
            }
            </style>

            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            
            <script>
              $(document).ready(function() {
                $('.pilihan').select2();
              });
            </script>
            
          </head>
          <body>
            <header>
              <div class="navbarmenu">
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                  <!-- Left navbar links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="navbar-toggler-icon"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="../index.php" class="nav-link"><ion-icon name="home-outline"></ion-icon> Dashboard</a>
                    </li>
                  </ul>
                </nav>
              </div>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="../index.php" class="brand-link">
    <img src="../assets/img/gambar1.jpg" alt="MCA Logo" class="brand-image img-box elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Inventory</span>
  </a>
  
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <ul class="user-panel mt-1 pb-1 mb-1">
        <a class="d-block"><b>Multiban Otoservis</b></a>
    </ul>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="pelanggan.php" class="nav-link">
          <ion-icon name="person-add-outline"></ion-icon>
            <p>
              Pelanggan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="barang.php" class="nav-link">
          <ion-icon name="file-tray-stacked-outline"></ion-icon>
            <p>
              Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="invoice.php" class="nav-link">
          <ion-icon name="card-outline"></ion-icon>
            <p>
              Invoicing
            </p>
          </a>
        </li>

        <br>
        <?php
          if($_SESSION['level'] == 'sv'){
            ?>
        <li class="nav-item">
          <a href="user.php" class="nav-link">
          <ion-icon name="people-outline"></ion-icon>  
            <p>
              Users
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="laporan.php" class="nav-link">
          <ion-icon name="bar-chart-outline"></ion-icon>
          <p>
              Laporan
            </p>
          </a>
        </li> -->
     
            <?php
          }
        ?>
        
        <br>
        <br>
        <li class="nav-item">
          <a href="../logout.php" class="nav-link">
          <ion-icon name="log-out-outline"></ion-icon> 
            <p>
              Keluar
            </p>
          </a>
        </li>
      </ul>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <ul class="nav-item mx">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><h3><ion-icon name="chevron-back-circle-outline"></ion-icon>tutup</h3></a>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
</header>

<br>
        <main class="main-header body body-expand body-white body-light">
        <div class="container-fluid">
        <div class="col-12">
                  <div class="container">
                  <h2><ion-icon name="card-outline"></ion-icon>Invoicing</h2>
                  <div class="ms-auto mb-5">
                  <a class="btn btn-dark float-right mb-4" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Tambah</a>
        <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
        <form action="../module/invoice_input.php" method="post">
          <div class="card-body">
              <!-- ------------------------------------------------------------------------------------------------------------------- -->
            <div class="form-group">
            <label for="exampleInputName">Nama Pelanggan</label>
            <select class="form-control pilihan" id="pelanggan" name="pelanggan" style="width:100%">
            <?php
              $get = $koneksi->query("select * from tbl_pelanggan order by nama asc");
              while ($data = $get->fetch_assoc()) {
                ?>
                <option value="<?php echo $data['id_pelanggan']; ?>"><?php echo $data['nama']; ?></option>
                <?php
              }
            ?>
                  </select>
            </div>
              <!-- ------------------------------------------------------------------------------------------------------------------- -->
          <div class="row">
                <div class="col">
                  <label for="exampleInputDate">Tanggal</label>
                  <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                </div>
                <div class="col">
                  <label for="exampleInputDate">Tenggat Waktu</label>
                  <input type="date" class="form-control" name="tenggat" placeholder="Tenggat Waktu">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputNumber">No. Invoice</label>
                <input type="number"  class="form-control" value="<?php echo $rand?>" name="no_invoice" readonly>
              </div>
              <!-- ------------------------------------------------------------------------------------------------------------------- -->
              <div class="row" id="add-">
                <div class="col">
                  <div class="form-group">
                    <label for="sel1">Barang:</label>
                    <select class="form-control pilihan" id="barang1" name="order[1][barang]" style="width:100%">
                    <?php
                      $get = $koneksi->query("select * from tbl_barang order by nm_barang asc");
                      while ($data = $get->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nm_barang']; ?> - <?php echo $data['harga']; ?></option>
                        <?php
                      }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputNumber">qty</label>
                  <input type="number" class="form-control" id="qty1" name="order[1][qty]" placeholder="qty"  onkeyup="getHarga()">
                </div>
                <div class="col">
                  <label for="exampleInputNumber">Harga Rp.</label>
                  <input type="varchar" class="form-control" name="order[1][amount]" id="harga1" placeholder="Harga" readonly>
                </div>
              </div>

              <!-- hgjhg -->
              <div class="row" id="add-1">
                <div class="col">
                  <div class="form-group">
                    <label for="sel1">Barang:</label>
                    <select class="form-control pilihan" id="barang2" name="order[2][barang]" style="width:100%">
                    <?php
                      $get = $koneksi->query("select * from tbl_barang order by nm_barang asc");
                      while ($data = $get->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nm_barang']; ?> - <?php echo $data['harga']; ?></option>
                        <?php
                      }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputNumber">qty</label>
                  <input type="number" class="form-control" id="qty2" name="order[2][qty]" placeholder="qty"  onkeyup="getHarga()">
                </div>
                <div class="col">
                  <label for="exampleInputNumber">Harga Rp.</label>
                  <input type="varchar" class="form-control" name="order[2][amount]" id="harga2" placeholder="Harga" readonly>
                </div>
              </div>

              <div class="row" id="add-2">
                <div class="col">
                  <div class="form-group">
                    <label for="sel1">Barang:</label>
                    <select class="form-control pilihan" id="barang3" name="order[3][barang]" style="width:100%">
                    <?php
                      $get = $koneksi->query("select * from tbl_barang order by nm_barang asc");
                      while ($data = $get->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nm_barang']; ?> - <?php echo $data['harga']; ?></option>
                        <?php
                      }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputNumber">qty</label>
                  <input type="number" class="form-control" id="qty3" name="order[3][qty]" placeholder="qty"  onkeyup="getHarga()">
                </div>
                <div class="col">
                  <label for="exampleInputNumber">Harga Rp.</label>
                  <input type="varchar" class="form-control" name="order[3][amount]" id="harga3" placeholder="Harga" readonly>
                </div>
              </div>

              <div class="row" id="add-3">
                <div class="col">
                  <div class="form-group">
                    <label for="sel1">Barang:</label>
                    <select class="form-control pilihan" id="barang4" name="order[4][barang]" style="width:100%">
                    <?php
                      $get = $koneksi->query("select * from tbl_barang order by nm_barang asc");
                      while ($data = $get->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nm_barang']; ?> - <?php echo $data['harga']; ?></option>
                        <?php
                      }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputNumber">qty</label>
                  <input type="number" class="form-control" id="qty4" name="order[4][qty]" placeholder="qty"  onkeyup="getHarga()">
                </div>
                <div class="col">
                  <label for="exampleInputNumber">Harga Rp.</label>
                  <input type="varchar" class="form-control" name="order[4][amount]" id="harga4" placeholder="Harga" readonly>
                </div>
              </div>

              <div class="row" id="add-4">
                <div class="col">
                  <div class="form-group">
                    <label for="sel1">Barang:</label>
                    <select class="form-control pilihan" id="barang5" name="order[5][barang]" style="width:100%">
                    <?php
                      $get = $koneksi->query("select * from tbl_barang order by nm_barang asc");
                      while ($data = $get->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $data['id_barang']; ?>"><?php echo $data['nm_barang']; ?> - <?php echo $data['harga']; ?></option>
                        <?php
                      }
                    ?>
                  </select>
                  </div>
                </div>
                <div class="col">
                  <label for="exampleInputNumber">qty</label>
                  <input type="number" class="form-control" id="qty5" name="order[5][qty]" placeholder="qty"  onkeyup="getHarga()">
                </div>
                <div class="col">
                  <label for="exampleInputNumber">Harga Rp.</label>
                  <input type="varchar" class="form-control" name="order[5][amount]" id="harga5" placeholder="Harga" readonly>
                </div>
              </div>
              <!-- jhkjhkj -->


              <center><a class="btn btn-warning btn-xs" id="add-button" onclick="add()" style=""><ion-icon name="add-outline"></ion-icon> Add</a> <a class="btn btn-danger btn-xs" id="remove-button" onclick="remove()" style=""><ion-icon name="remove-outline"></ion-icon> Remove</a></center>
              <br>
              <label for="exampleInputNumber">Total Rp. <span id="total-harga"></span> </label>
              <input type="hidden" name="total_amount" id="total_amount">
              <!-- ------------------------------------------------------------------------------------------------------------------- -->
              <div class="form-group">
                <label for="exampleInputText">Catatan</label>
                <input type="text" class="form-control" name="catatan" placeholder="Masukan email atau catatan pesanan anda">
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" name="invoice" class="btn btn-primary">Masukan</button>
            </div>
          </div>
          </form>
          </div>
        </div>
                  </div>
          
                  <table class="table table-striped mt-4">
                  <thead>
                      <tr>
                      <th>No. Invoice</th>
                      <th>Tanggal</th>
                      <th>Pelanggan</th>
                      <th>Tagihan</th>
                      <!-- <th>Status</th> -->
                      <th>Catatan</th>
                      <th>Action</th>
                      <th>Cetak</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                    
                    $invoice = mysqli_query($koneksi, "SELECT * from tbl_invoice, tbl_pelanggan where tbl_invoice.pelanggan = tbl_pelanggan.id_pelanggan");
                   
                  
                    $no = 1;
                    while($data = mysqli_fetch_array($invoice)){
                      ?>
                      <tr>
                        <td>INV-<?php echo $data['no_invoice']; ?></td>
                        <td><?php echo $data['tanggal']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td>Rp.<?php echo $data['total_amount']; ?></td>
                        <!-- <td><div class="custom-control custom-switch">
                          <input type="checkbox" class="custom-control-input" id="customSwitch<?=$no?>">
                          <label class="custom-control-label" for="customSwitch<?=$no?>">Lunas</label>
                        </div>
                      </td> -->
                        <td><?php echo $data['catatan']; ?></td>
                        <td>
                        &nbsp;&nbsp;&nbsp;<a value=user name=user href='../module/delete_process.php?aksi=invoice&id=<?php echo $data['id_invoice']; ?>'><ion-icon name="trash-outline"></ion-icon></a>					
                        </td>
                        <td>
                        &nbsp;&nbsp;&nbsp;<a value=cetak name=cetak href="../p_invoice.php?aksi=print&id=<?php echo $data['id_invoice'];?>"><ion-icon name="print-outline"></ion-icon></a>					
                          </td>
                        </tr>
                      <?php 
                      $no++;
                    } 
                    ?>
                  </tbody>
                  </table>
                  </div>
              </div>
              
          </div>
        </main>
        
             </body>
              </html>
              <?php
          }
          ?>
              
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script>
  function getHarga(){
    var barang1 = $('#barang1').val();
    var qty1 = $('#qty1').val();

    var barang2 = $('#barang2').val();
    var qty2 = $('#qty2').val();

    var barang3 = $('#barang3').val();
    var qty3 = $('#qty3').val();

    var barang4 = $('#barang4').val();
    var qty4 = $('#qty4').val();

    var barang5 = $('#barang5').val();
    var qty5 = $('#qty5').val();

    var hasil = 0;

    if(qty1 != ''){
      $.post("ajax.php", {key : 'kevin',id: barang1}, function(result){
        var harga = result;

        var raw = parseInt(qty1) * parseInt(harga);
        hasil += raw;

        $('#harga1').val(raw);
        $('#total-harga').html(hasil);
        $('#total_amount').val(hasil);
      });

    }
    if(qty2 != ''){
      $.post("ajax.php", {key : 'kevin',id: barang2}, function(result){
        var harga = result;

        var raw = parseInt(qty2) * parseInt(harga);
        hasil += raw;

        $('#harga2').val(raw);
        $('#total-harga').html(hasil);
        $('#total_amount').val(hasil);
      });

    }
    if(qty3 != ''){
      $.post("ajax.php", {key : 'kevin',id: barang3}, function(result){
        var harga = result;

        var raw = parseInt(qty3) * parseInt(harga);
        hasil += raw;

        $('#harga3').val(raw);
        $('#total-harga').html(hasil);
        $('#total_amount').val(hasil);
      });

    }
    if(qty4 != ''){
      $.post("ajax.php", {key : 'kevin',id: barang4}, function(result){
        var harga = result;

        var raw = parseInt(qty4) * parseInt(harga);
        hasil += raw;

        $('#harga4').val(raw);
        $('#total-harga').html(hasil);
        $('#total_amount').val(hasil);
      });

    }

    if(qty5 != ''){
      $.post("ajax.php", {key : 'kevin',id: barang5}, function(result){
        var harga = result;

        var raw = parseInt(qty5) * parseInt(harga);
        hasil += raw;

        $('#harga5').val(raw);
        $('#total-harga').html(hasil);
        $('#total_amount').val(hasil);
      });

    }
    
  }


  var $add = 0;
    $('#remove-button').hide();
    $('#add-1').hide();
    $('#add-2').hide();
    $('#add-3').hide();
    $('#add-4').hide();

    function add(){
        $add++;

        load();
    }

    function remove(){
        $add--;

        load();

        remove_empty($add+1);
    }

    function load(){
        $('#add-0').hide();
        $('#add-1').hide();
        $('#add-2').hide();
        $('#add-3').hide();
        $('#add-4').hide();


        if($add == 0){
            $('#remove-button').hide();
            $('#add-button').show();
        }

        if($add > 0){
            $('#remove-button').show();
            $('#add-button').show();
        }

        if($add == 3){
            $('#add-button').hide();
            
        }
        
        for (let i = 0; i <= $add; i++) {
            $('#add-'+i).show();      
        }
    }

    function remove_empty(i){
        $('#no_doc_'+i).val('');
        $('#date_'+i).val('');
        $('#description_'+i).val('');
        $('#amount_'+i).val('');
    }
</script>