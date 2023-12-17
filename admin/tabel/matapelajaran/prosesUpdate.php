<?php
require '../../../koneksi.php';

$id = $_POST['id'];
$nama_mata_pelajaran = $_POST['nama_mata_pelajaran'];
$kode = $_POST['kode'];
$kelas = $_POST['kelas'];
$jam = $_POST['jam'];
$jurusan = $_POST['jurusan'];

$sql = mysqli_query($koneksi , "UPDATE mata_pelajaran SET
nama_mata_pelajaran = '$nama_mata_pelajaran',
kode = '$kode',
kelas = '$kelas',
jam = '$jam',
jurusan = '$jurusan'

WHERE
id_mata_pelajaran= $id
");

echo "
<script>
alert('Berhasil Edit Data');
document.location.href='../../matkul.php';
</script>";