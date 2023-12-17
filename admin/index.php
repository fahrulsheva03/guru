<!DOCTYPE html>
<html lang="en">

<?php
require 'koneksi.php';
require 'head.php';

if(!isset($_SESSION['login'])){
  echo "
  <script>
  alert ('Anda Belum Login')
  location = 'login.php'
  </script>
  ";
}

$guru = mysqli_query($koneksi , "SELECT * FROM guru");
$data = mysqli_num_rows($guru);

$jadwal = mysqli_query($koneksi , "SELECT * FROM jadwal");
$data1 = mysqli_num_rows($jadwal);

$matkul = mysqli_query($koneksi , "SELECT * FROM mata_pelajaran ");
$data2 = mysqli_num_rows($matkul);

$kelas = mysqli_query($koneksi , "SELECT * FROM kelas ");
$data3 = mysqli_num_rows($kelas);

?>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php require 'side.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->

            <?php
      require 'nav.php'
      ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12 mb-2 mb-xl-5">
                            <h4 class="font-weight-bold text-dark">DASHBOARD ADMIN</h4>
                            <!-- <p class="font-weight-normal mb-2 text-muted">APRIL 1, 2019</p> -->
                        </div>


                        <div class="container  text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="col-sm-10 grid-margin stretch-card">
                                        <div class="card bg-dark text-center">
                                            <div class="card-body">
                                                <h3 class="pb-3 text-white">
                                                    <i class="icon-head"></i>
                                                    Data Guru
                                                </h3>
                                                <h2 class="text-white font-weight-bold"><?= $data ?></h2>
                                                <h4 class="text-white">
                                                    <a href="guru.php" class="text-white state-hover">
                                                        <i class="icon-play"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="col-sm-10 grid-margin stretch-card">
                                        <div class="card bg-info text-center">
                                            <div class="card-body">
                                                <h3 class="pb-3 text-white">
                                                    <i class="icon-briefcase"></i>
                                                    Data Jadwal
                                                </h3>
                                                <h2 class="text-white font-weight-bold"><?= $data1 ?></h2>
                                                <h4 class="text-white">
                                                    <a href="jadwal.php" class="text-white state-hover">
                                                        <i class="icon-play"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="col-sm-10 grid-margin stretch-card">
                                        <div class="card bg-primary text-center">
                                            <div class="card-body">
                                                <h4 class="pb-3 text-white">
                                                    <i class="icon-folder"></i>
                                                    Data Mata Pelajaran
                                                </h4>
                                                <h2 class="text-white font-weight-bold"><?= $data2 ?></h2>
                                                <h4 class="text-white">
                                                    <a href="matkul.php" class="text-white state-hover">
                                                        <i class="icon-play"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2 container text-center">
                            <div class="row">
                                <div class="col">
                                    <div class="col-sm-10 grid-margin stretch-card">
                                        <div class="card bg-success text-center">
                                            <div class="card-body">
                                                <h3 class="pb-3 text-white">
                                                    <i class="icon-grid"></i>
                                                    Data Kelas
                                                </h3>
                                                <h2 class="text-white font-weight-bold"><?= $data3 ?></h2>
                                                <h4 class="text-white">
                                                    <a href="kelas.php" class="text-white state-hover">
                                                        <i class="icon-play"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php  require 'foot.php'; ?>
</body>

</html>