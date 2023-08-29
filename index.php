<?php

// error_reporting(0);
include 'assets/php/db.php';
include 'assets/php/function.php';

session_start();

// pemanggilan function oop
$action = new func();

// keamanan
if(empty($_SESSION['nama_petugas'])){
    $action->redirect("login.php");
}

// mendeclare menu dan action
$menu = $_GET['menu'];
$act = $_GET['action'];
 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="">
    <title>Web PLN</title>
    <link rel="apple-touch-icon" href="assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <!-- Font awesome Start -->
    <link href="assets/vendor/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.css" rel="stylesheet">
    <!-- Sweetalert start -->
    <link href="assets/vendor/sweetalert/sweetalert.css" rel="stylesheet" />
    <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
    <!-- Sweetalert End -->
    <!-- Font awesome ENd -->
    <link rel="stylesheet" type="text/css" href="assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/datatables.min.css"/>

    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/bootstrap-extended.css">

    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- CKEDITOR start -->
    <script src="assets/vendor/ckeditor/ckeditor.js"></script>
    <!-- CKEDITOR END -->
    <!-- BEGIN: Page CSS-->

    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="assets/app-assets/css/pages/hospital.css">
    <!-- END: Page CSS-->
    <style type="text/css">
body {
        --ck-z-default: 100;
        --ck-z-modal: calc( var(--ck-z-default) + 999 );
    }
    </style>
    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php 
    // import template header oop
    require 'page/header.php';
    // import template leftbar oop
    require 'page/leftbar.php';

    // import dokumen sesuai menu - oop
    switch ($menu) {
        case 'home':include 'page/home.php'; break;
        case 'tarif':include 'page/tarif/table.php'; break;
        case 'pelanggan':include 'page/pelanggan/table.php'; break;
        case 'penggunaan':include 'page/penggunaan/table.php'; break;
        default:$action->redirect("?menu=home");break;
    }

    // import dokumen action oop
    switch ($act){
        case 'delete':include 'page/'.$menu.'/delete.php';break;
    }
    
 ?>
    <!-- BEGIN: Content-->
    

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer fixed-bottom footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2023 <a class="text-bold-800 grey darken-2" href="https://instagram.com/m_.fadhil" target="_blank">Fadhil</a></span><span class="float-md-right d-none d-lg-block">Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="assets/app-assets/vendors/js/charts/chart.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/app-assets/js/core/app-menu.js"></script>
    <script src="assets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/app-assets/js/scripts/pages/appointment.js"></script>
    <script src="assets/app-assets/js/scripts/pages/hospital-add-doctors.js"></script>
    <!-- END: Page JS-->

    <script src="assets/app-assets/vendors/js/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
    <script type="text/javascript" src="assets/vendor/datatables/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
    $('#table').DataTable({
        // responsive: true
    });
} );
</script>

<!-- melempar value menggunakan jquery js -->
<script type="text/javascript">
$(document).on("click", ".modaledit", function () {
    var id = $(this).data('id');
    var golongan = $(this).data('golongan');
    var daya =  $(this).data('daya');
    var tarif =  $(this).data('tarif');
    var idpel = $(this).data('idpel');
    var nometer = $(this).data('no');
    var nama = $(this).data('nama');
    var alamat = $(this).data('alamat');
    var idtarif = $(this).data('idtarif');
    
    $(".modal-body #id").val( id );
    $(".modal-body .form-group #golongan").val( golongan );
    $(".modal-body .form-group #daya").val( daya );
    $(".modal-body .form-group #tarif").val( tarif );
    $(".modal-body .form-group #idpel").val( idpel );
    $(".modal-body .form-group #nometer").val( nometer );
    $(".modal-body .form-group #nama").val( nama );
    $(".modal-body .form-group #alamat").val( alamat );
    $(".modal-body .custom-select #tarif").val( idtarif );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
</script>

<!-- import modal sesuai menu yang sedang dijalankan -->
<?php
switch($menu){
    case 'tarif':include 'page/tarif/modal.php';break;
    case 'pelanggan':include 'page/pelanggan/modal.php';break;
    case 'penggunaan':include 'page/penggunaan/modal.php';break;
}

 ?>

</body>
<!-- END: Body-->

</html>