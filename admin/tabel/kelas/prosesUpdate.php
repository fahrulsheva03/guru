<?php
require '../../../koneksi.php';

$id = $_POST['id'];
$kelas = $_POST['kelas'];
$tingkat = $_POST['tingkat'];
$wali_kelas = $_POST['wali_kelas'];

$sql = mysqli_query($koneksi , "UPDATE kelas SET
nama_kelas = '$kelas',
tingkat = '$tingkat',
id_wali_kelas = $wali_kelas


WHERE
id_kelas= $id
");

echo "
<script>
alert('Berhasil Edit Data');
document.location.href='../../kelas.php';
</script>";