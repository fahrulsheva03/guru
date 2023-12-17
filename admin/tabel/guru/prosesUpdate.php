<?php
require '../../../koneksi.php';

$id = $_POST['id'];
$guru = $_POST['nama_guru'];
$mataPelajaran = $_POST['mata_pelajaran'];
$email = $_POST['email'];
$noHp = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];
$ttl = $_POST['tanggal_lahir'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi , "UPDATE guru SET
nama_guru = '$guru',
mata_pelajaran = '$mataPelajaran',
email = '$email',
nomor_telepon = '$noHp',
alamat = '$alamat',
password = '$password',
tanggal_lahir = '$ttl'
WHERE
id_guru= $id
");

echo "
<script>
alert('Berhasil Edit Data');
document.location.href='../../guru.php';
</script>";