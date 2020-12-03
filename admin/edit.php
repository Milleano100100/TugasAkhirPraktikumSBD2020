<?php
require_once('../db_login/db_login.php');

$id_pembayaran = $_GET['id_pembayaran'];
if (isset($_POST['hitme'])) {

    $id_pembayaran = $_POST['id_pembayaran'];
    $lapangan = $_POST['lapangan'];
    $jns_lapangan = $_POST['jns_lapangan'];
    $jam = $_POST['jam'];
    $tanggal = $_POST['tanggal'];

    $result = mysqli_query($mysqli, "UPDATE transaksi SET id_pembayaran='$id_pembayaran',lapangan='$lapangan',jns_lapangan='$jns_lapangan',jam='$jam',tanggal='$tanggal' WHERE id_pembayaran=$id_pembayaran");

    header("Location: sewa.php");
}
?>

<?php

$id_pembayaran = $_GET['id_pembayaran'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM transaksi WHERE id_pembayaran=$id_pembayaran");

while ($user_data = mysqli_fetch_array($result)) {
    $id_pembayaran = $user_data['id_pembayaran'];
    $lapangan = $user_data['lapangan'];
    $jns_lapangan = $user_data['jns_lapangan'];
    $jam = $user_data['jam'];
    $tanggal = $user_data['tanggal'];
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Data</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../css/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../css/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../css/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../css/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../css/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../css/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="../keluar.php?user=<?php echo $user; ?>" role="button">
                        <i class="fas fa-sign-out-alt">Keluar</i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../dist/img/jepara.jpg" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Selamat Datang</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="sewa.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    List Data sewa
                                </p>
                            </a>
                        </li>

                        <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Data Sewa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="sewa.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Data Sewa</li>
                                <li class="breadcrumb-item active">Edit Data Sewa </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-danger">
                                <div class="card-header">

                                </div>
                                <div class="card-body">

                                    <form id="form" method="post" class="form_control">
                                        <div class="row">
                                            <div class="col-3">

                                                <input placeholder="Masukkan id pembayaran" type="hidden" class="form-control" name="id_pembayaran" maxlength="100" value=<?php echo $id_pembayaran; ?> required>
                                            </div>
                                            <div class="col-4">
                                                <label>Nama Lapangan</label>
                                                <input placeholder="Masukkan Lapangan" type="text" class="form-control" name="lapangan" maxlength="100" value=<?php echo $lapangan; ?> required>
                                            </div>
                                            <div class="col-5">
                                                <label>Jenis Lapangan</label>
                                                <input placeholder="Masukkan Jenis Lapangan" type="text" class="form-control" name="jns_lapangan" maxlength="20" value=<?php echo $jns_lapangan; ?> required>
                                            </div>
                                            <div class="col-3">
                                                <label>Jam</label>
                                                <input placeholder="Masukkan Jam" type="text" class="form-control" name="jam" maxlength="20" value=<?php echo $jam; ?> required>
                                            </div>
                                            <div class="col-4">
                                                <label>Tanggal</label>
                                                <input placeholder="Masukkan Tanggal" type="date" class="form-control" name="tanggal" maxlength="20" value=<?php echo $tanggal; ?> required>
                                            </div>
                                        <div class="card-footer">
                                            <input type="submit" name="hitme" class="submit" value="Update Gan!">
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="../css/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../cssplugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="../css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="../css/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="../css/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="../css/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="../css/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../css/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="../css/plugins/moment/moment.min.js"></script>
        <script src="../css/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../css/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="../css/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../css/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../css/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../css/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../css/dist/js/demo.js"></script>
        <!-- jQuery -->

        <script src="../css/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../css/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../css/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../css/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../css/dist/js/demo.js"></script>
    </div>
</body>

</html>