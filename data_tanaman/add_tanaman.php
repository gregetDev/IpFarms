<?php
$title = "Tambah Data Petani";
include_once "../header.php";
include_once "../config/koneksi.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Tambah Data - </strong></h2>
            </div>
            <div class="panel-body">
            <div class=pull-right>
              <?php
                  $id = @$_GET['id'];
                  $sql_user = mysqli_query($koneksi, "SELECT * FROM tb_tanaman WHERE kd_lahan = '$id'") or die (mysqli_error($koneksi));
                  $data = mysqli_fetch_array($sql_user);
              ?>
                <p><a class="btn btn-warning" href="../data_lahan/detail.php?id=<?=$_GET['id']?>&lahan=<?=$_GET['lahan']?>#petani"><i class="glyphicon glyphicon-chevron-left"></i> kembali</a></p><br>
            </div>

              <!-- Awal Form -->
              <form action="proses_tanaman.php?lahan=<?=$_GET['lahan']?>" method="post">
              <div class="form-group">
                  <input type="hidden" name="kd_lahan" value="<?=$_GET['id']?>" class="form-control input-text"/>
              </div>
              <div class="form-group">
                  <input type="hidden" name="nama_lahan" value="<?=$_GET['lahan']?>" class="form-control input-text"/>
              </div>
              <div class="form-group">
                  <input type="hidden" name="tangal" class="form-control input-text"/><br>
              </div>
              <div class="form-group">
                  <label>Nama Tanaman</label>
                  <input type="text" name="nama_tanaman" class="form-control input-text" placeholder="Masukan Nama Tanaman" required autofocus/>
              </div>
              <div class="form-group">
                  <label>Jenis Tanaman</label>
                  <input type="text" name="jenis_tanaman" class="form-control input-text" placeholder="Masukan Jenis Tanaman" required/>
              </div>
              <div class="form-group">
                  <label>Tanggal Tanam</label>
                  <input type="date" name="tanggal_tanam" class="form-control input-text" require/>
              </div>
              <div class="form-group">
                  <label>Tanggal Panen</label>
                  <input type="date" name="tanggal_panen" class="form-control input-text" required/>
              </div>
              <div class="form-group text-center">
                  <input name="add" type="submit" class="btn btn-success" value="Add Data">
              </div>
              </form>
              <!-- Akhir Form -->

            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>





<?php include_once "../footer.php" ?>
