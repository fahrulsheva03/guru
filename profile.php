<?php
require 'koneksi.php';

$id = $_SESSION['guru']['id_guru'];

$query = mysqli_query($koneksi , "SELECT * FROM jadwal 

JOIN
guru
ON
jadwal.guru = guru.id_guru
JOIN
kelas
ON
jadwal.id_kelas = kelas.id_kelas
JOIN
mata_pelajaran
ON
jadwal.id_mata_pelajaran = mata_pelajaran.id_mata_pelajaran

WHERE guru = $id

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
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-description"></p>
                                    <?php 
                  $query = mysqli_query($koneksi , "SELECT * FROM guru WHERE id_guru = $id");
                  while($d = mysqli_fetch_array($query)){
                  ?>
                                    <h4>Profile Anda</h4>
                                    <form class="forms-sample" method="post" action="proses/update.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="<?= $d['id_guru'] ?>" hidden
                                                name="id" placeholder="Nama Guru">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Nama Guru</label>
                                            <input type="text" class="form-control" value="<?= $d['nama_guru'] ?>"
                                                name="nama_guru" placeholder="Nama Guru">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Mata Pelajaran</label>
                                            <select name="mata_pelajaran" id="" class="form-control">
                                                <?php 
                          $sql2 = mysqli_query($koneksi , "SELECT * FROM mata_pelajaran");
                          while($data = mysqli_fetch_assoc($sql2)){
                            $selected = ($data['id_mata_pelajaran'] == $d['mata_pelajaran']) ? "selected" : "";
                          ?>
                                                <option value="<?= $data['id_mata_pelajaran'] ?>" <?= $selected ?>>
                                                    <?= $data['nama_mata_pelajaran'] ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Email</label>
                                            <input type="email" class="form-control" value="<?= $d['email'] ?>"
                                                name="email" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Nomor Handphone</label>
                                            <input type="text" class="form-control" value="<?= $d['nomor_telepon'] ?>"
                                                name="nomor_telepon" placeholder="Nomor Handphone">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Alamat</label>
                                            <input type="text" class="form-control" value="<?= $d['alamat'] ?>"
                                                name="alamat" placeholder="Alamat">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Tanggal Lahir</label>
                                            <input type="date" class="form-control" value="<?= $d['tanggal_lahir'] ?>"
                                                name="tanggal_lahir" placeholder="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Password</label>
                                            <input type="text" class="form-control" value="<?= $d['password'] ?>"
                                                name="password" placeholder="Password">
                                        </div>

                                        <button type="submit" name="edit" class="btn btn-primary mr-2">Edit</button>
                                        <!-- <button class="btn btn-light">Cancel</button> -->
                                        <?php 
                    }
                    ?>
                                    </form>
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