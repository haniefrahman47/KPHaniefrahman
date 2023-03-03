<?php 
	include "../lib/koneksi.php";
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>User</title>
      
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
          <link rel="stylesheet" href="assets/css/style.css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css"/>
      
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
          <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
          <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
         
        </head>
        <body>
          <div class="card-footer">
            <a href="../login.php" class="btn btn-primary">Kembali</a>
          </div>
<br>
        <main class="main-header body body-expand body-white body-light">
        <div class="container-fluid">
        <div class="col-12">
                  <div class="container">
                  <h2><ion-icon name="people-outline"></ion-icon> Daftar Users Pelanggan</h2>
        <div class="col">
            <div class="card card-body">
              <form action="../module/input_process.php" method="post">
                <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputText">Nama</label>
                          <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputText">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputText">username</label>
                          <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="pengguna" value="pengguna" class="btn btn-primary">Masukan</button>
                      </div>
        </form>
            </div>

        </div>
              
          </div>
        </main>
        
             </body>
              </html>