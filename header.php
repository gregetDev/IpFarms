<?php include_once "config/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <link href="<?= base_url('img/fav.ico');?>" rel="shorcut icon">    
    <link href="<?= base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/datatable-bootstrap.css');?>" rel="stylesheet">
    <link href="<?= base_url('css/datepicker.css');?>" rel="stylesheet" >
    <link href="<?= base_url('DataTables/dataTables.min.css');?>" rel="stylesheet" >

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">  
                <img class="img-responsive margin-b10" src="<?= base_url('img/logo-logo.png');?>" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-11">
                <h1 class="judul-head">Ip Farms</h1>
                <table>
                  <thead>
                    <tr>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <td><i class="fa fa-map-marker fa-fw"></i></td>
                    <td><p><small>Jalan Raya Tangkuban Perahu KM. 22, Pasar Ahad Cikole,<br>
                            Cikole, Lembang,Kabupaten Bandung Barat, Jawa Barat40391</small></p></td>
                  </tbody>
                </table>
              </div>
            </div>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
      </div>
    </div>
    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?= base_url('index.php');?>"><i class="fa fa-home"></i> HALAMAN DEPAN</a></li>
            <li><a href="<?= base_url('data_lahan/data.php');?>"><i class="fa fa-list-ul"></i> DATA LAHAN</a></li>
            <li><a href="<?= base_url('peta.php');?>"><i class="fa fa-map-marker"></i> PETA PERSEBARAN LAHAN</a></li>
            <li><a href="http://localhost/ipfarms/history/history.php?tanggal=<?=date('Y-m-d');?>"><i class="fa fa-book"></i> HISTORY</a></li>
            <li><a href="" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT</a></li>
            <li><a href="<?= base_url('setting.php');?>"><i class="fa fa-gear"></i> SETTING</a></li>
            <li><a href="<?= base_url('auth/logout.php');?>"><i class="fa fa-power-off"></i> LOGOUT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
