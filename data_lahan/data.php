<?php
$title = "Daftar Lahan";
include_once "../config/koneksi.php";
include_once "../header.php";?>


  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info panel-dashboard">
        <div class="panel-heading centered">
          <h2 class="panel-title"><strong> - Daftar Lahan - </strong></h2>
        </div>
        <div class="panel-body">
          <p><a class="btn btn-primary" href="<?= base_url('data_lahan/add_lahan.php') ?>"><i class="fa fa-plus fa-fw"></i> Tambah Data</a></p>

          <!-- Mulai table -->
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="table-admin">
              <thead>
                <tr>
                  <th >No.</th>
                  <th >Kd Lahan</th>
                  <th >Nama Lahan</th>
                  <th >Panjang(m)</th>
                  <th >Lebar(m)</th>
                  <th >Luas(m2)</th>
                  <th >Jenis Tanah</th>
                  <th ><i class="fa fa-gear fa-fw"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $data = file_get_contents(base_url('data_lahan/ambildata.php'));
                  $no=1;
                  if(json_decode($data,true)){
                    $obj = json_decode($data);
                    foreach($obj->results as $item){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $item->kd_lahan; ?></td>
                  <td><?php echo $item->nama_lahan; ?></td>
                  <td><?php echo $item->panjang; ?></td>
                  <td><?php echo $item->lebar; ?></td>
                  <td><?php echo $item->luas; ?></td>
                  <td><?php echo $item->jenis_tanah; ?></td>
                  <td class="ctr">
                      <a href="detail.php?id=<?= $item->id_lahan; ?>&lahan=<?= $item->nama_lahan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                      <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                      <a href="edit_lahan.php?id=<?= $item->id_lahan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-warning">
                      <i class="glyphicon glyphicon-edit"> </i></a>&nbsp;
                      <a href="delete_lahan.php?id=<?= $item->id_lahan; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-danger" onclick="return confirm('Yakin ingin meghapus data ?')" >
                      <i class="glyphicon glyphicon-trash"> </i></a>&nbsp;
                  </td>
                </tr>
                  <?php }}

                  else{
                    echo "<tr><td colspan=\"6\" align=\"center\">Data tidak temukan</td></tr>";
                  } ?>
              </tbody>
              </table>
            </div>
          <!-- Akhir table -->
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_once "../footer.php" ?>
