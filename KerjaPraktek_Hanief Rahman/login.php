<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</head>
<body>
    <div class="container">

        <?php
            if(isset($_GET['login'])){
                $get = $_GET['login'];

                ?>
                <div class="alert alert-warning mt-5 alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong> <?=$get?>
                </div>

                <?php
            }
        ?>
        <div class="row mt-5">
            <div class="col-md-5 mt-4">
                <img src="assets/img/gambar1.jpg" class="gambar1">
            </div>
            <div class="col-md-5 ml-auto">
                <div class="kotak1 mt-5">
                    <label><h4>Admin Login</h4></label>
                <form action="module/login_process.php" method="POST">
                    <div class="form-group">
                        <label for="email">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Login</button>
                </form>
            </div>
            <br>
            <!-- <a href="page2/daftar.php" class="btn btn-primary col-12">Daftar</a>
            <br>
            <br>
            <a href="page2/login.php" class="btn btn-primary col-12">login pelanggan</a> -->
            </div>
        </div>
    </div>
</body>
</html>