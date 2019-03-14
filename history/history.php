<?php 
$title="History";
include_once "../config/koneksi.php";
include_once "../header.php";
      
?>

  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-info panel-dashboard">
        <div class="panel-heading centered">
          <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#lahan">History Lahan</a></li>
              <li><a data-toggle="tab" href="#petani">History Petani</a></li>
              <li><a data-toggle="tab" href="#tanaman">History Tanaman</a></li>
          </ul>
        </div>
        <div class="panel-body" style="height:200px">
          <div class="tab-content">
            <!-- History Lahan -->
            <div id="lahan" class="tab-pane fade in active">
              <!-- Mulai table -->
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table-admin">
                <thead>
                  <tr>
                    <th width="10px">No.</th>
                    <th >Kode Lahan</th>
                    <th >Nama Lahan</th>
                    <th >Panjang(m)</th>
                    <th >Lebar(m)</th>
                    <th >Luas(m2)</th>
                    <th >Jenis Tanah</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  $id = $_GET['tanggal'];
                  $history = mysqli_query($koneksi, "SELECT * FROM tb_lahan where tanggal=\"$id\"") or die (mysqli_error($koneksi));
                  if (mysqli_num_rows($history) > 0) {
                    while($data = mysqli_fetch_array($history)){
                  ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['kd_lahan'] ?></td>
                    <td><?= $data['nama_lahan'] ?></td>
                    <td><?= $data['panjang'] ?></td>
                    <td><?= $data['lebar'] ?></td>
                    <td><?= $data['luas'] ?></td>
                    <td><?= $data['jenis_tanah'] ?></td>
                  </tr>
                  <?php }}

                  else{
                      echo "<tr><td colspan=\"8\" align=\"center\">History tidak ada </td></tr>";
                  } ?>
                </tbody>
                </table>
              </div>
              <!-- Akhir table -->
            </div>
            <!-- Akhir History Lahan -->

            <!-- Awal History Petani -->
            <div id="petani" class="tab-pane fade">
              <!-- Mulai table -->
              <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table-admin">
                  <thead>
                      <tr>
                        <th >No.</th>
                        <th >Nama Lahan</th>
                        <th >Nama Petani</th>
                        <th >No Handphone</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no=1;
                    $sql_petani = mysqli_query($koneksi, "SELECT * FROM tb_petani where tanggal=\"$id\"")or die(mysqli_error($koneksi));
                    if (mysqli_num_rows($sql_petani) > 0) {
                      while($data = mysqli_fetch_array($sql_petani)){
                    ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama_lahan'] ?></td>
                      <td><?= $data['nama_petani'] ?></td>
                      <td><?= $data['no_hp'] ?></td>
                    </tr>
                    <?php }}

                    else{
                        echo "<tr><td colspan=\"4\" align=\"center\">History tidak ada</td></tr>";
                    } ?>
                    </tbody>
                  </table>
                </div>
                <!-- Akhir table -->
              </div>
              <!-- Akhir History petani -->

              <!-- Awal History Tanaman -->
              <div id="tanaman" class="tab-pane fade">
                <!-- Mulai table -->
                <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="table-admin">
                    <thead>
                        <tr>
                          <th >No.</th>
                          <th >Nama Lahan</th>
                          <th >Nama Tanaman</th>
                          <th >Jenis Tanaman</th>
                          <th >Tanggal Tanam</th>
                          <th >Tanggal Panen</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      $sql_petani = mysqli_query($koneksi, "SELECT * FROM tb_tanaman where tanggal=\"$id\"")or die(mysqli_error($koneksi));
                      if (mysqli_num_rows($sql_petani) > 0) {
                        while($data = mysqli_fetch_array($sql_petani)){
                      ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nama_lahan'] ?></td>
                        <td><?= $data['nama_tanaman'] ?></td>
                        <td><?= $data['jenis_tanaman'] ?></td>
                        <td><?= $data['tanggal_tanam'] ?></td>
                        <td><?= $data['tanggal_panen'] ?></td>
                      </tr>
                      <?php }}

                      else{
                          echo "<tr><td colspan=\"6\" align=\"center\">History tidak ada</td></tr>";
                      } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- Akhir table -->
                </div>
                <!-- Akhir History Tanaman -->
            </div>
        </div>

      </div>
    </div>
  </div>
  </div>
</div>
<?php include_once "../footer.php";?>
