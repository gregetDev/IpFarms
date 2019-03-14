<?php
$title = "Tambah Data Lahan";
include_once "../header.php";
include_once "../config/koneksi.php"; ?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - Tambah Data - </strong></h2>
      </div>
      <div class="panel-body">
      <div class=pull-right>
          <p><a class="btn btn-warning" href="<?= base_url('data_lahan/data.php') ?>"><i class="glyphicon glyphicon-chevron-left"></i> kembali</a></p><br>
      </div>

          <!-- Awal Form -->
          <form action="proses.php" method="post">
          <div class="form-group">
              <br><br><label for="">Kode Lahan</label>
              <input type="text" name="kd_lahan" class="form-control input-text" placeholder="Masukan Kode Lahan" required autofocus/>
          </div>
          <div class="form-group">
              <label for="">Nama Lahan</label>
              <input type="text" name="nama_lahan" class="form-control input-text" placeholder="Masukan Nama Lahan" required/>
              <div class="validation"></div>
          </div>
          <div class="form-group">
              <label for="">Jenis Tanah</label>
              <input type="text" name="jenis_tanah" class="form-control input-text" placeholder="Masukan Jenis Tanah"/>
              <div class="validation"></div>
          </div>
          <div class="form-group">
              <label for="">Panjang Lahan</label>
              <input type="text" name="panjang" class="form-control input-text" placeholder="Masukan Panjang Lahan"/>
          </div>
          <div class="form-group">
              <label for="">Lebar Lahan</label>
              <input type="text" name="lebar" class="form-control input-text" placeholder="Masukan Lebar Lahan" />
              <div class="validation"></div>
          </div>
          <div class="form-group">
              <label for="">Latitude</label>
              <input type="text" name="latitude" class="form-control input-text" placeholder="Masukan Latitude" required/>
          </div>
          <div class="form-group">
              <label for="">Longitude</label>
              <input type="text" name="longitude" class="form-control input-text" placeholder="Masukan Longitude" required/>
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
<?php include_once "../footer.php" ?>
