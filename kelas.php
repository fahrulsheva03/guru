<?php
require 'koneksi.php';
$id = $_SESSION['guru']['id_guru'];

$query = mysqli_query($koneksi , "SELECT * FROM kelas

JOIN
guru
ON
kelas.id_wali_kelas = guru.id_guru

WHERE 

id_wali_kelas = $id 

");
?>

<!DOCTYPE html>
<html lang="en">

<?php require 'components/head.php'; ?>


<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php require 'components/side.php'; ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:../../partials/_sidebar.html -->
            <?php 
      require 'components/nav.php';
      ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"></h4>
                                    <p class="card-description">
                                        <!-- Add class <code>.table</code> -->
                                    </p>
                                    <div class="table-responsive">
                                        <h4 class="h4"> <?= $d['nama_guru'] ?> </h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Kelas</th>
                                                    <th>Tingkat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                        while($d = mysqli_fetch_array($query)){
                        ?>
                                                <tr>
                                                    <td><?=$d['nama_kelas'] ?> </td>
                                                    <td><?=$d['tingkat'] ?></td>

                                                </tr>

                                                <?php
                        }
                        ?>
                                                <tr></tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
                            from Bootstrapdash.com</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="assets/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/template.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>