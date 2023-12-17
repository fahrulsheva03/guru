<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guru</title>
    <!-- base:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="admin/assets/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="admin/assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="admin/assets/vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin/assets/css/style.css">

    <!-- endinject -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />


    <?php 
    
    $id = $_SESSION['guru']['id_guru'];

    $sql = mysqli_query($koneksi , "SELECT *  FROM guru WHERE id_guru = $id");
    $d = mysqli_fetch_assoc($sql);

?>


</head>