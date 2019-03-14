<?php
$title = "Tambah Data";
include_once "../header.php";
include_once "../config/koneksi.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Edit Data - </strong></h2>
            </div>
            <div class="panel-body">
            <div class=pull-right>
                <p><a class="btn btn-warning" href="data.php"><i class="fa fa-backward fa-fw"></i> kembali</a></p><br>
            </div>

                <?php
                    $id = @$_GET['id'];
                    $sql_user = mysqli_query($koneksi, "SELECT * FROM tb_lahan WHERE id_lahan = '$id'") or die (mysqli_error($koneksi));
                    $data = mysqli_fetch_array($sql_user);
                ?>
                <!-- Awal Form -->
                <form action="proses.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?=$data['id_lahan'] ?>"><br>
                   </div>
                   <div class="form-group">
                       <label for="">Kode Lahan</label>
                       <input type="text" name="kd_lahan" class="form-control input-text" value="<?=$data['kd_lahan'] ?>" placeholder="Masukan Kode Lahan" required autofocus/>
                   </div>
                   <div class="form-group">
                       <label for="">Nama Lahan</label>
                       <input type="text" name="nama_lahan" class="form-control input-text" value="<?=$data['nama_lahan'] ?>" placeholder="Masukan Nama Lahan" required/>
                       <div class="validation"></div>
                   </div>
                   <div class="form-group">
                       <label for="">Jenis Tanah</label>
                       <input type="text" name="jenis_tanah" class="form-control input-text" value="<?=$data['jenis_tanah'] ?>" placeholder="Masukan Jenis Tanah"/>
                       <div class="validation"></div>
                   </div>
                   <div class="form-group">
                       <label for="">Panjang Lahan</label>
                       <input type="text" name="panjang" class="form-control input-text" value="<?=$data['panjang'] ?>" placeholder="Masukan Panjang Lahan" required/>
                   </div>
                   <div class="form-group">
                       <label for="">Lebar Lahan</label>
                       <input type="text" name="lebar" class="form-control input-text" value="<?=$data['lebar'] ?>" placeholder="Masukan Lebar Lahan" required/>
                       <div class="validation"></div>
                   </div>
                   <div class="form-group">
                       <label for="">Latitude</label>
                       <input type="text" name="latitude" class="form-control input-text" value="<?=$data['latitude'] ?>" placeholder="Masukan Latitude" required/>
                   </div>
                   <div class="form-group">
                       <label for="">Longitude</label>
                       <input type="text" name="longitude" class="form-control input-text" value="<?=$data['longitude'] ?>" placeholder="Masukan Longitude" required/>
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
</div>





<?php include_once "../footer.php" ?>
