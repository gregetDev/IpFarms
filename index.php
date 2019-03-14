<?php
include_once "config/koneksi.php";
$title = "Ip Farms";
include_once "header.php";

if (isset($_SESSION ['user'])){?>
<?php ($_SESSION['sessPass'] =0); ?>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info panel-dashboard">
        <div class="panel-heading centered">
          <h2 class="panel-title"><strong> - Selamat Datang - </strong></h2>
        </div>
        <div class="panel-body" style="height:185px">
          <div class="centered">
            <h4>Selamat Datang di Sistem Informasi Geografis Ip Farms.</h4>
            <h4>Silakan memilih menu diatas untuk melanjutkan.</h4>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include_once "footer.php"; }
else{
  echo "<script>window.location ='".base_url('auth/login.php')."';</script>";
}?>
</body>
</html>
