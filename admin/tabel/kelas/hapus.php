<?php
require '../../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM kelas WHERE id_kelas = $id")  ;

echo "
<script>
document.location.href='../../kelas.php'
</script>
";