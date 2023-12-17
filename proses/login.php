<?php 
require '../koneksi.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $sql = mysqli_query($koneksi , "SELECT * FROM guru WHERE
    email = '$email' AND
    password = '$password' 
    ");
      $cek = mysqli_num_rows($sql);
      if($cek == 1){
        $data = mysqli_fetch_assoc($sql);
      $_SESSION['guru'] = $data;
      $_SESSION['login'] = true;
      echo "
      <script>
      alert('Berhasil Login')
      location = '../index.php'
      </script>
      ";
    }else{
      echo "
      <script>
      alert('Password Salah')
      location = '../login.php'
      </script>
      ";
    }
  }