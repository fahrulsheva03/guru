<!DOCTYPE html>
<html lang="en">

<?php
require 'koneksi.php';

if(!isset($_SESSION['login']) OR empty($_SESSION['login']) ){
    echo "
    <script>
  alert ('Anda Belum Login')
  location = 'login.php'
  </script>
  ";
}

require 'components/head.php';
?>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require 'components/side.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->

            <?php
      require 'components/nav.php'
      ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12 mb-2 mb-xl-5">
                            <h4 class="font-weight-bold text-dark">Welcome <?= $_SESSION['guru']['nama_guru'] ?> , Login
                                Sebagai Guru
                            </h4>
                            <!-- <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> -->
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php  require 'components/foot.php'; ?>
</body>

</html>