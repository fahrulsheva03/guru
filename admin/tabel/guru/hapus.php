<?php
require '../../../koneksi.php';

$id = $_GET['id'];

$sql = mysqli_query($koneksi , "DELETE FROM guru WHERE id_guru = $id")  ;

echo "
<script>
document.location.href='../../guru.php'
</script>
";