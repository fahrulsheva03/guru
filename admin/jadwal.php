<?php
require '../koneksi.php';
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

");
?>

<!DOCTYPE html>
<html lang="en">

<?php require 'head.php'; ?>


<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->

        <?php require 'side.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:../../partials/_sidebar.html -->
            <?php 
      require 'nav.php';
      ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg- grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Tabel Jadwal</h4>
                                    <p class="card-description">
                                        <!-- Add class <code>.table</code> -->
                                    </p>
                                    <a href="tabel/jadwal/formTambah.php"><button type="button"
                                            class="btn btn-info">Tambah Data</button></a>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Nama Guru</th>
                                                    <th>Mata Pelajaran</th>
                                                    <th>Kelas</th>
                                                    <th>Hari</th>
                                                    <th>Jam Mulai </th>
                                                    <th>Jam Selesai</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                        while($d = mysqli_fetch_array($query)){
                        ?>
                                                <tr>
                                                    <td><?= $d['nama_guru'] ?></td>
                                                    <td><?= $d['nama_mata_pelajaran'] ?></td>
                                                    <td><?= $d['nama_kelas'] ?></td>
                                                    <td><?=$d['hari'] ?></td>
                                                    <td><?=$d['jam_mulai'] ?></td>
                                                    <td><?=$d['jam_selesai'] ?></td>
                                                    <td>
                                                        <a href="tabel/jadwal/formUpdate.php?id=<?= $d['id_jadwal']?>">
                                                            <button class="btn btn-warning">Update</button></a> |
                                                        <a href="tabel/jadwal/hapus.php?id=<?= $d['id_jadwal']?> ">
                                                            <button class="btn btn-danger">Delete</button></a>
                                                    </td>
                                                </tr>
                                                <?php
                        }
                        ?>
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