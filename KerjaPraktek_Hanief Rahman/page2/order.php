<?php
	session_start();  
	include"lib/koneksi.php";
  

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Daftar & Pesan</title>
      
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
      <a href="order.php" class="nav-link"><ion-icon name="home-outline"></ion-icon></a>
    </li>
  </ul>
</nav>
</div>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="assets/img/logo.png" alt="MCA Logo" class="brand-image img-box elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Order Customer</span>
  </a>
  
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <ul class="user-panel mt-1 pb-1 mb-1">
        <a class="d-block"><b>Mulia Cemerlang Abadi</b></a>
    </ul>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="page2/pelanggan.php" class="nav-link">
          <ion-icon name="person-add-outline"></ion-icon>
            <p>
              Pelanggan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="page2/invoice.php" class="nav-link">
          <ion-icon name="file-tray-stacked-outline"></ion-icon>
            <p>
              Pesan Barang
            </p>
          </a>
        </li>
        <br>
        <li class="nav-item">
          <a href="login.php" class="nav-link">
          <ion-icon name="log-out-outline"></ion-icon> 
            <p>
            Kembali Halaman Login
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
          <div class="col-lg-12 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="person-add-outline"></ion-icon></h3>

                <h2>Daftar Pelanggan Baru</h2>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page2/pelanggan.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-12 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><ion-icon name="file-tray-stacked-outline"></ion-icon></h3>

                <h2>Pesan Barang</h2>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="page2/invoice.php" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
        <label>Kepada customer yang terhormat, Anda bisa memesan barang melalui Whatsapp, Email dan juga Website kami.</label>
    </div>
      </main>
       </body>
        </html>