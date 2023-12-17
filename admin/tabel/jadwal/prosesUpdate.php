<?php
require '../../../koneksi.php';

$id = $_POST['id_jadwal'];
$hari = $_POST['hari'];
$jamMulai = $_POST['jamMulai'];
$jamSelesai = $_POST['jamSelesai'];
$guru = $_POST['guru'];
$kelas = $_POST['kelas'];
$matkul = $_POST['matkul'];

$sql = mysqli_query($koneksi , "UPDATE jadwal SET
hari = '$hari',
jam_mulai = '$jamMulai',
jam_selesai = '$jamSelesai',
guru = '$guru' ,
id_kelas = '$kelas' ,
id_mata_pelajaran = '$matkul'  
WHERE
id_jadwal= $id
");

echo "
<script>
alert('Berhasil Edit Data');
document.location.href='../../jadwal.php';
</script>";