<?php
	session_start();  
	include"lib/koneksi.php";
  
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
          <title>Dashboard</title>
      
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
          <link rel="stylesheet" href="assets/css/style.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
      
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
          <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
          <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
         
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
      <a href="index.php" class="nav-link"><ion-icon name="home-outline"></ion-icon> Dashboard</a>
    </li>
  </ul>
</nav>
</div>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="assets/img/gambar1.jpg" alt="gambar1" class="brand-image img-box elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Inventory</span>
  </a>
  
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <ul class="user-panel mt-1 pb-1 mb-1">
        <a class="d-block"><b>PT.Multiban Otoservis</b></a>
    </ul>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="page/pelanggan.php" class="nav-link">
          <ion-icon name="person-add-outline"></ion-icon>
            <p>
              Pelanggan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="page/barang.php" class="nav-link">
          <ion-icon name="file-tray-stacked-outline"></ion-icon>
            <p>
              Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="page/invoice.php" class="nav-link">
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
          <a href="page/user.php" class="nav-link">
          <ion-icon name="people-outline"></ion-icon>  
            <p>
              Users
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="page/laporan.php" class="nav-link">
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
          <a class="nav-link"> 
          <?php
          if($_SESSION['level'] == 'sv'){
            ?>
          <p>
          &emsp;&emsp;   Owner
          </p>
            <?php
          }
          ?>
                    <?php
          if($_SESSION['level'] == 'admin'){
            ?>
          <p>
          &emsp;&emsp;&emsp;   Pengelola Toko
          </p>
            <?php
          }
          ?>
          </a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link">
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
      <div class="col">
        <div class="row">
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="person-add-outline"></ion-icon></h3>
                <?php 
                    
                    $pelanggan = mysqli_query($koneksi, "SELECT count(*) as pelanggan FROM tbl_pelanggan");
                    while($data = mysqli_fetch_array($pelanggan)){
                      ?>
                <h2>Pelanggan : <?php echo $data['pelanggan']; ?></h2>


                      <?php
                    }
                    ?>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page/pelanggan.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="file-tray-stacked-outline"></ion-icon></h3>
                <?php 
                    
                    $barang = mysqli_query($koneksi, "SELECT count(*) as cnt FROM tbl_barang");
                    while($data = mysqli_fetch_array($barang)){
                      ?>
                <h2>Barang : <?php echo $data['cnt']; ?></h2>
                      
                      <?php
                    }
                    ?>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page/barang.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->          
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="card-outline"></ion-icon></h3>
                <?php 
                    
                    $invoice = mysqli_query($koneksi, "SELECT sum(total_amount) as amount FROM tbl_invoice");
                    while($data = mysqli_fetch_array($invoice)){
                      ?>
                <h2>Invoice : Rp.<?php echo $data['amount']; ?></h2>
                      <?php
                    }
                    ?>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page/invoice.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <?php
          if($_SESSION['level'] == 'sv'){
            ?>
            <!-- ./col -->          
            <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="people-outline"></ion-icon></h3>  

                <h2>Users</h2>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page/user.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="bar-chart-outline"></ion-icon></h3>  

                <h2>Laporan</h2>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page/laporan.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="cash-outline"></ion-icon></h3>  
                <?php 
                    
                    $invoice = mysqli_query($koneksi, "SELECT sum(amount) as amount FROM tbl_order");
                    while($data = mysqli_fetch_array($invoice)){
                      ?>
                      <h2>Profit : Rp.<?php echo $data['amount']; ?></h2>
                      <?php
                    }
                    ?>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a class="small-box-footer">
              Pendapatan MCA<i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          <?php
          }
          ?>
          <!-- ./col -->
        </div>
    </div>
      </main>
       </body>
        </html>
        <?php
    }
?>