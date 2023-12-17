<?php
require '../../../koneksi.php';


if(isset($_POST['tambah'])){
    $kelas = $_POST['kelas'];
    $tingkat = $_POST['tingkat'];
    $wali_kelas = $_POST['wali_kelas'];

    // $query = mysqli_query($koneksi , "INSERT INTO guru SET 
    // nama_guru =  '$nama' , 
    // mata_pelajaran = $mataPelajaran , 
    // email = '$email' , 
    // nomor_telepon ='$nohp' , 
    // alamat = '$alamat' , 
    // tanggal_lahir =  '$ttl' ");
    $query = mysqli_query($koneksi , "INSERT INTO kelas SET 
    nama_kelas = '$kelas' , 
    tingkat   = '$tingkat', 
    id_wali_kelas = $wali_kelas
    ");

    if($query){
        echo "
        <script>
        alert('Berhasil Tambah Data');
        document.location.href='../../kelas.php';
    </script>";
    }
}

