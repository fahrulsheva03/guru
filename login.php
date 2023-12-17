<?php 
require 'koneksi.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/login/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="assets/login/css/style.css">

    <title>Login Guru</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/login/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Login Guru</h3>
                                <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                            </div>
                            <form action="proses/login.php" method="post">
                                <div class="form-group first">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" class="form-control" id="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password">

                                </div>
                                <input type="submit" value="Masuk" name="login" class=" mb-3 btn btn-block btn-primary">


                                <!-- <span class="d-block text-left my-4 text-muted">&mdash; Register Here  <a href="register.php">Register</a> &mdash;</span> -->


                            </form>
                            <a href="admin/login.php">
                                <input type="" value="LOGIN ADMIN" class=" btn btn-block btn-primary">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="assets/login/js/jquery-3.3.1.min.js"></script>
    <script src="assets/login/js/popper.min.js"></script>
    <script src="assets/login/js/bootstrap.min.js"></script>
    <script src="assets/login/js/main.js"></script>
</body>

</html>