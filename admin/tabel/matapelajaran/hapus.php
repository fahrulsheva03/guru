<?php
require '../../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM mata_pelajaran WHERE id_mata_pelajaran = $id")  ;

echo "
<script>
document.location.href='../../matkul.php'
</script>
";