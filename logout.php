<?php
include 'assets/php/function.php';
$action = new func();
session_start();
session_destroy();
// unset($_SESSION['username_petugas']);
// unset($_SESSION['id_petugas']);
// unset($_SESSION['nama_petugas']);
// unset($_SESSION['akses_petugas']);
$action->redirect("login.php");
?>