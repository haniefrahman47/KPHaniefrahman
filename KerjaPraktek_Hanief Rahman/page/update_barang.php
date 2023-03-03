<?php
	session_start();  
	include"../lib/koneksi.php";
  
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
    <span class="brand-text font-weight-light">Administrasi</span>
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
                  <h2 class="mb-5"><ion-icon name="file-tray-stacked-outline"></ion-icon>Edit Data Barang</h2>
                  <div class="ms-auto mb-5">
           
        <div class="row">
        <div class="col">
          <div class=" multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">

            <?php
                if (!isset($_GET['id']) ||$_GET['id'] == '') {
                  die('id null');
                }

                $id = $_GET['id'];
                $get_barang = $koneksi->query("SELECT * FROM tbl_barang where id_barang = '$id'");
                $get_barang = $get_barang->fetch_assoc();

              ?>
              
              <form action="../module/update_process.php" method="post">
                <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">No. Barang</label>
                          <input type="hidden" name="id_barang" value="<?=$id?>">
                          <input type="number" class="form-control" name="no_barang" placeholder="Masukan Nama" value="<?php echo $get_barang['no_barang']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputNumber1">Nama Barang</label>
                          <input type="text" class="form-control" name="nm_barang" placeholder="Masukan Nama Barang"  value="<?php echo $get_barang['nm_barang']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail">Jumlah (qty.)</label>
                          <input type="number" class="form-control" name="jumlah" placeholder="Masukan Email"  value="<?php echo $get_barang['jumlah']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail">Berat (Kg.)</label>
                          <input type="number" class="form-control" name="berat" placeholder="Masukan Email"  value="<?php echo $get_barang['berat']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail">Harga</label>
                          <input type="number" class="form-control" name="harga" placeholder="Masukan Email"  value="<?php echo $get_barang['harga']; ?>">
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="barang" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </main>
    
  </body>
  </html>
  <?php
}
?>
      
      
                  