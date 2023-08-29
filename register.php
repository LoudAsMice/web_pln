<?php 
include '../assets/php/db.php';
include '../assets/php/function.php';
session_start();
if (isset($_COOKIE['login'])) {
	$_SESSION['id'] = $_COOKIE['id'];
	$_SESSION['username'] = $_COOKIE['key'];
	$_SESSION['login'] = true
	?>
	<script type="text/javascript">
		window.location.href = "index.php";
	</script>
	<?php
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
</head>
 <body>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <form method="post">
                <div class="logo">
                  <img src="../assets/images/user.png">
                </div>
                <?php if (isset($_POST['submit'])) {
                  $username = $_POST['username'];
                  $password1 = $_POST['password1'];
                  $password2 = $_POST['password2'];
                  if (ctype_alpha($_POST['username'])) {
                    if ($password1 === $password2) {
                      $sql = count(query("SELECT * FROM user WHERE username='$username'"));
                      if ($sql == 0) {
                        $insert = insert("INSERT INTO `user`(`username`, `password`, `level`, `status`) VALUES ('$username','$password1','Masyarakat','Not Yet Verified')");
                        if (mysqli_affected_rows($koneksi) == "1") {
                          $last_id = $koneksi->insert_id;
                          insert("INSERT INTO `user_detail`(`userid`) VALUES ('$last_id')");
                          ?>
                          <div class="alert alert-success" role="alert">
                            Pendaftaran Berhasil Silahkan <a href="login.php" class="alert-link">Login</a>.
                          </div>
                          <?php
                        }
                      }else{
                        ?>
                        <div class="alert alert-danger" role="alert">
                          Username telah terdaftar
                        </div>
                        <?php
                      }
                    }else{
                       ?>
                        <div class="alert alert-danger" role="alert">
                          Password Tidak Sesuai
                        </div>
                        <?php
                    }
                  }else{
                     ?>
                        <div class="alert alert-danger" role="alert">
                          Username Hanya Boleh Huruf
                        </div>
                        <?php
                  }
                } ?>
                <div class="form-group"  style="padding: 10px 10px;">
                  <input type="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter username" required="" aria-required="true">
                </div>

                <div class="form-group"  style="padding: 10px 10px;">
                  <input type="password" id="password1" name="password1" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>
                <div class="form-group"  style="padding: 10px 10px;">
                  <p><font size="2" style="padding-left: 2px;color: red;">**Konfirmasi Ulang Password</font></p>
                  <input type="password" id="password2" name="password2" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <div class="form-group"  style="padding: 10px 10px;">
                  <div class="_btn_04">
                    <button type="submit" name="submit" style="background-color: transparent;border:none;color: white;" >Register</button>
                  </div>
                </div>

                <div class="form-group nm_lk"><a href="login.php">Sudah punya akun? <strong>Login</strong></a></div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>