<?php 
include '../assets/php/db.php';
include '../assets/php/function.php';

$action = new func();
session_start();
if (isset($_SESSION['id_agen'])) {
	$action->redirect('index.php');
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/vendor/sweetalert/sweetalert.css" rel="stylesheet" />
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
</head>
 <body>

    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="../assets/images/user.png">
                </div>

<?php
// if ($_SESSION['username_petugas']!="") {
//   $action->redirect("index.php?menu=home");
// }

//jika tekan login maka menjalankan fungsi login dari library 
if (isset($_POST['submit'])) {
  $username = mysqli_escape_string($koneksi, $_POST['username']);
  $password = mysqli_escape_string($koneksi, md5($_POST['password']));
  $action->login("agen",$username,$password,"index.php");
}


?>
                <form method="post">
                <div class="form-group" style="padding: 20px 20px;">
                  <input type="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter username" required="" aria-required="true">
                </div>

                <div class="form-group" style="padding: 20px 20px;">
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <!-- <div class="checkbox form-group" style="padding: 10px 10px;">
                  <div class="form-check">

                    <input class="form-check-input" type="checkbox" value="remember" name="remember">
                    <label class="form-check-label" for="remember">
                      Tetap Login
                    </label>
                  </div>
                  
                </div> -->

                <div class="form-group" style="padding: 10px 10px;">

                    <button class="btn _btn_04" type="submit" name="submit">Login</button>
                  </div>
                  <!-- <div class="form-group nm_lk"><a href="register.php">Belum punya akun? <strong>Register</strong></a></div> -->
                </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   </body>
</html>