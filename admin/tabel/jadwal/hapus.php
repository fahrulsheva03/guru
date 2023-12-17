<?php
require '../../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM jadwal WHERE id_jadwal = $id")  ;

echo "
<script>
document.location.href='../../jadwal.php'
</script>
";