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
                  $sql_user = mysqli_query($koneksi, "SELECT * FROM tb_petani WHERE id_petani = '$id'") or die (mysqli_error($koneksi));
                  $data = mysqli_fetch_array($sql_user);
              ?>
              <p><a class="btn btn-warning" href="../data_lahan/detail.php?id=<?=$data['kd_lahan'] ?>&lahan=<?=$_GET['lahan']?>"><i class="fa fa-backward fa-fw"></i> kembali</a></p><br>
            </div>
                <!-- Awal Form -->
                <form action="proses_petani.php?lahan=<?=$_GET['lahan']?>" method="post">
                  <div class="form-group">
                    <input type="hidden" name="id_petani" value="<?=$data['id_petani'] ?>" class="form-control input-text"/>
                  </div>
                <div class="form-group">
                    <input type="hidden" name="kd_lahan" value="<?=$data['kd_lahan'] ?>" class="form-control input-text"/>
                </div>
                <div class="form-group">
                    <input type="hidden" name="tangal" value="<?=$data['tanggal'] ?>"class="form-control input-text"/><br>
                </div>
                <div class="form-group">
                    <label ><b>Nama Petani</b></label></label>
                    <input type="text" name="nama_petani" value="<?=$data['nama_petani'] ?>"class="form-control input-text" placeholder="Masukan Nama Petani" required autofocus/>
                </div>
                <div class="form-group">
                    <label ><b>No Hp</b></label></label>
                    <input type="text" name="no_hp" value="<?=$data['no_hp'] ?>"class="form-control input-text" required/>
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
