<?php
$title = "Tambah Data";
include_once "../header.php";
include_once "../config/koneksi.php"; ?>

    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Edit Data - </strong></h2>
            </div>
            <div class="panel-body">
            <div class=pull-right>
              <?php $id = @$_GET['id'];?>
              <?php
                  $sql_user = mysqli_query($koneksi, "SELECT * FROM tb_tanaman WHERE id_tanaman = '$id'") or die (mysqli_error($koneksi));
                  $data = mysqli_fetch_array($sql_user);
              ?>
              <p><a class="btn btn-warning" href="../data_lahan/detail.php?id=<?=$data['kd_lahan'] ?>&lahan=<?=$_GET['lahan']?>#petani"><i class="fa fa-backward fa-fw"></i> kembali</a></p><br>
            </div>
                <!-- Awal Form -->
                <form action="proses_tanaman.php?lahan=<?=$_GET['lahan']?>" method="post">
                  <div class="form-group">
                      <input type="hidden" name="id_tanaman" value="<?=$data['id_tanaman'] ?>" class="form-control input-text"/>
                  </div>
                <div class="form-group">
                    <input type="hidden" name="kd_lahan" value="<?=$data['kd_lahan'] ?>" class="form-control input-text"/>
                </div>
                <div class="form-group">
                    <input type="hidden" name="tangal" value="<?=$data['tanggal'] ?>"class="form-control input-text"/>
                </div>
                <div class="form-group">
                    <input type="text" name="nama_tanaman" value="<?=$data['nama_tanaman'] ?>"class="form-control input-text" placeholder="Masukan Nama Petani" required autofocus/>
                </div>
                <div class="form-group">
                    <input type="text" name="jenis_tanaman" value="<?=$data['jenis_tanaman'] ?>"class="form-control input-text" placeholder="Masukan Nama Petani" required autofocus/>
                </div>
                <div class="form-group">
                    <input type="date" name="tanggal_tanam" value="<?=$data['tanggal_tanam'] ?>"class="form-control input-text" required autofocus/>
                </div>
                <div class="form-group">
                    <input type="date" name="tanggal_panen" value="<?=$data['tanggal_panen'] ?>"class="form-control input-text" required autofocus/>
                </div>
                <div class="form-group text-center">
                    <input name="edit" type="submit" class="btn btn-success" value="Update Data">
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
    
<?php include_once "../footer.php" ?>
