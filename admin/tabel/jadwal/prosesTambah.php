<?php
require '../../../koneksi.php';


if(isset($_POST['tambah'])){
    $hari = $_POST['hari'];
    $jamMulai = $_POST['jamMulai'];
    $jamSelesai = $_POST['jamSelesai'];
    $guru = $_POST['guru'];
    $kelas = $_POST['kelas'];
    $matkul = $_POST['matkul'];

    // $query = mysqli_query($koneksi , "INSERT INTO guru SET 
    // nama_guru =  '$nama' , 
    // mata_pelajaran = $mataPelajaran , 
    // email = '$email' , 
    // nomor_telepon ='$nohp' , 
    // alamat = '$alamat' , 
    // tanggal_lahir =  '$ttl' ");
    $query = mysqli_query($koneksi , "INSERT INTO jadwal SET
    hari  = '$hari' ,
    jam_mulai = '$jamMulai' , 
    jam_selesai = '$jamSelesai' ,
    guru = '$guru' ,
    id_kelas = '$kelas' ,
    id_mata_pelajaran = '$matkul'  
    ");

    if($query){
        echo "
        <script>
        alert('Berhasil Tambah Data');
        document.location.href='../../jadwal.php';
    </script>";
    }
}