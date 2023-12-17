<?php
require '../../../koneksi.php';


if(isset($_POST['tambah'])){
    $nama_guru = $_POST['nama_guru'];
    $mata_pelajaran = $_POST['mata_pelajaran'];
    $email = $_POST['email'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi , "INSERT INTO guru SET 
    nama_guru =  '$nama_guru' , 
    mata_pelajaran = '$mata_pelajaran' , 
    email = '$email' , 
    nomor_telepon ='$nomor_telepon' , 
    alamat = '$alamat' , 
    password = '$password' , 
    tanggal_lahir =  '$tanggal_lahir' ");
    // $query = mysqli_query($koneksi , "INSERT INTO guru 
    // (nama_guru, mata_pelajaran, email, nomor_telepon, alamat, tanggal_lahir) 
    // VALUES 
    // ('$nama_guru', '$mata_pelajaran', '$email', '$nomor_telepon', '$alamat', '$tanggal_lahir')");

    if($query){
        echo "
        <script>
        alert('Berhasil Tambah Data');
        document.location.href='../../guru.php';
    </script>";
    }
}