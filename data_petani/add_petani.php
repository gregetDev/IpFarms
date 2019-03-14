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
                <p><a class="btn btn-warning" href="../data_lahan/detail.php?id=<?=$_GET['id']?>&lahan=<?=$_GET['lahan']?>"><i class="glyphicon glyphicon-chevron-left"></i> kembali</a></p><br>
            </div>

                <!-- Awal Form -->
                <form action="proses_petani.php?&lahan=<?=$_GET['lahan']?>" method="post">
                <div class="form-group">
                    <input  type="hidden" name="kd_lahan" value="<?=$_GET['id'] ?>" class="form-control input-text"/>
                </div>
                <div class="form-group">
                    <input  type="hidden" name="nama_lahan" value="<?=$_GET['lahan'] ?>" class="form-control input-text"/>
                </div>
                <div class="form-group">
                    <input type="hidden" name="tangal" class="form-control input-text"/><br>
                </div>
                <div class="form-group">
                    <label for="">Nama Petani</label>
                    <input type="text" name="nama_petani" class="form-control input-text" placeholder="Masukan Nama Petani" required autofocus/>
                </div>
                <div class="form-group">
                    <label for="">No Handphone</label>
                    <input type="text" name="no_hp" class="form-control input-text" placeholder="Masukan No.hp" required/>
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
