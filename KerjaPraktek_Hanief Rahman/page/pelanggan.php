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
          <title>Pelanggan</title>
      
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
                  <h2><ion-icon name="person-add-outline"></ion-icon>Pelanggan</h2>
                  <div class="ms-auto mb-5">
                  <a class="btn btn-dark float-right" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Tambah</a>
        <div class="row">
        <div class="col">
          <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
        <form action="../module/input_process.php" method="post">
        <div class="card-body">
                        <!-- <div class="form-group">
                          <label for="exampleInputNumber">NPWP</label>
                          <input type="number" class="form-control" name="npwp" placeholder="Masukan npwp">
                        </div> -->
                        <div class="form-group">
                          <label for="exampleInputText">Nama Pelanggan</label>
                          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Pelanggan">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputText">Alamat</label>
                          <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputText">Telpon</label>
                          <input type="text" class="form-control" name="telpon" placeholder="Masukan Alamat">
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="pelanggan" class="btn btn-primary">Masukan</button>
                      </div>
        </form>
            </div>
          </div>
        </div>
                  </div>
          
                  <table class="table table-striped">
                  <thead>
                      <tr>
                      <th>No</th>
                      <!-- <th>NPWP</th> -->
                      <th>Nama Pelanggan</th>
                      <th>Alamat</th>
                      <th>telpon</th>
                      <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                    
                    $pelanggan = mysqli_query($koneksi, "SELECT * from tbl_pelanggan");
                    $no = 1;
                    while($data = mysqli_fetch_array($pelanggan)){
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <!-- <td><?php echo $data['npwp']; ?></td> -->
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['telpon']; ?></td>
                        <td>
                          <a value=user name=user href="update_pelanggan.php?aksi=pelanggan&id=<?php echo $data['id_pelanggan']; ?>"><ion-icon name="create-outline"></ion-icon>&nbsp;&nbsp;&nbsp;</a>
                          <a value=user name=user href='../module/delete_process.php?aksi=pelanggan&id=<?php echo $data['id_pelanggan']; ?>'><ion-icon name="trash-outline"></a>					
                        </td>
                      </tr>
                      <?php } ?>
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