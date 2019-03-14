<?php include_once "../config/koneksi.php";
if (isset($_SESSION ['user'])){
	echo "<script>window.location ='".base_url()."';</script>";
}else{?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
    <link href="<?= base_url('img/fav.ico');?>" rel="shorcut icon">    
		<title>Login</title>
		<link href="<?= base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css');?>" rel="stylesheet">

	</head>
	<body>
    <div class="container">
      <div class="row" style="margin-top:190px;">

        <!-- awal form admin -->
        <div class="col-md-6 col-md-offset-3">
          <h3>LOGIN</h3>
          <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="user"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pass"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn" value="Login" name="login" />
                </div>

                <!-- awal php login admin -->
                <?php
                if(isset($_POST['login'])){
                  $user = trim(mysqli_real_escape_string($koneksi, $_POST['user']));
                  $pass = trim(mysqli_real_escape_string($koneksi, $_POST['pass']));
                  $sql_login = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($koneksi));

									// $cek = mysqli_num_rows($sql_login);
                  if (mysqli_num_rows($sql_login) > 0) {
											$_SESSION ['user'] = $user;
                      echo "<script>window.location ='".base_url()."';</script>";

                  }else { ?>
                    <div class="alert alert-danger alert-dismissable" role="alert">
                      <a href="#" class="close" data-dismiss ="alert" aria-lable="close">&times</a>
                      <span class="glyphicon glyphicon-exclamation-sign" aria-hiden="true"></span>
                      <strong>Login Gagal! Username/password salah</strong>
                    </div>
                  <?php
                  }
                }?>
                <!-- akhir php login admin -->
            </form>
          </div>
        </div>
    </div>
  </body>
</html>
<?php } ?>
