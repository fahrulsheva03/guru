<?php
require '../../../koneksi.php';


if(isset($_POST['tambah'])){
    $nama_mata_pelajaran = $_POST['nama_mata_pelajaran'];
    $kode = $_POST['kode'];
    $kelas = $_POST['kelas'];
    $jam = $_POST['jam'];
    $jurusan = $_POST['jurusan'];

    $query = mysqli_query($koneksi , "INSERT INTO mata_pelajaran SET 
    nama_mata_pelajaran =  '$nama_mata_pelajaran' , 
    kode = '$kode' , 
    kelas = '$kelas' , 
    jam ='$jam' , 
    jurusan = '$jurusan' ");

    if($query){
        echo "
        <script>
        alert('Berhasil Tambah Data');
        document.location.href='../../matkul.php';
    </script>";
    }
}

