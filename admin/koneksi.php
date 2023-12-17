<?php

date_default_timezone_set('Asia/Jakarta');

$server = "localhost";
$username = "root";
$password = "";
$database = "db_guru";

$koneksi = mysqli_connect($server,$username,$password,$database);
session_start();




?>