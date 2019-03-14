<?php
$id = $_GET['id'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$titles="";
$ids="";
$kd="";
$panjang="";
$lebar="";
$jtnh="";
$luas="";
$lat="";
$long="";
foreach($obj->results as $item){
  $titles.=$item->nama_lahan;
  $ids.=$item->id_lahan;
  $kd.=$item->kd_lahan;
  $panjang.=$item->panjang;
  $lebar.=$item->lebar;
  $luas.=$item->luas;
  $jtnh.=$item->jenis_tanah;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
include_once "../header.php"; ?>


 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABrmz3R6seMOs8masfTdY-OzcRL_b35QE&callback=initMap"
 type="text/javascript"></script>

<script>

function initMap() {
  var myLatlng = new google.maps.LatLng('<?php echo $lat ?>','<?php echo $long ?>');
  var mapOptions = {
    zoom: 17,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $luas ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'../img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

      <!-- Awal lokasi -->
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Lokasi -->

      <!-- Awal Detail -->
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#petani">Data Petani</a></li>
                  <li><a data-toggle="tab" href="#tanaman">Data Tanaman</a></li>
              </ul>
            </div>
            <div class="panel-body" style="width:100%;">
              <div class="tab-content">
                <!-- Awal tab petani -->
                <div id="petani" class="tab-pane fade in active">
                  <?php 
                    $id = $_GET['id'];
                    $lahan = $_GET['lahan']; ?>
                  <p><a class="btn btn-primary" href="../data_petani/add_petani.php?id=<?=$id ?>&lahan=<?=$lahan ?>"><i class="fa fa-plus fa-fw"></i> Tambah Data</a></p><br>
                  <!-- Mulai table -->
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table-admin">
                    <thead>
                        <tr>
                        <th >No.</th>
                        <th >Nama Lahan</th>
                        <th >Nama Petani</th>
                        <th >No Handphone</th>
                        <th width="22%"><i class="fa fa-gear fa-fw"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no=1;
                      $sql_petani = mysqli_query($koneksi, "SELECT * FROM tb_petani where kd_lahan=\"$id\"")or die(mysqli_error($koneksi));
                      if (mysqli_num_rows($sql_petani) > 0) {
                        while($data = mysqli_fetch_array($sql_petani)){
                      ?>
                      <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama_lahan'] ?></td>
                      <td><?= $data['nama_petani'] ?></td>
                      <td><?= $data['no_hp'] ?></td>
                      <td width="10%" class="ctr" align="center">
                          <a href="../data_petani/edit_petani.php?id=<?=$data['id_petani']?>&lahan=<?=$lahan ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-warning">
                          <i class="glyphicon glyphicon-edit"> </i></a>&nbsp;
                          <a href="../data_petani/delete_petani.php?id=<?=$data['id_petani']?>&kd_lahan=<?=$data['kd_lahan'] ?>&lahan=<?=$lahan ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-danger" onclick="return confirm('Yakin ingin meghapus data ?')" >
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
                <!-- Akhir tab petani -->

                <!-- Awal tab tanaman -->
                <div id="tanaman" class="tab-pane fade">
                  <?php 
                    $id = $_GET['id'];
                    $lahan = $_GET['lahan']; ?>
                  <p><a class="btn btn-primary" href="../data_tanaman/add_tanaman.php?id=<?=$id ?>&lahan=<?=$lahan ?>"><i class="fa fa-plus fa-fw"></i> Tambah Data</a></p><br>
                  <!-- Mulai table -->
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table-admin1">
                    <thead>
                        <tr>
                        <th >No.</th>
                        <th >Nama Lahan</th>
                        <th >Nama Tanaman</th>
                        <th >Jenis Tanaman</th>
                        <th >Tanggal Tanam</th>
                        <th >Tanggal Panen</th>
                        <th ><i class="fa fa-gear fa-fw"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        $sql_petani = mysqli_query($koneksi, "SELECT * FROM tb_tanaman where kd_lahan=\"$id\"")or die(mysqli_error($koneksi));
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
                        <td width="10%" class="ctr" align="center">
                            <a href="../data_tanaman/edit_tanaman.php?id=<?=$data['id_tanaman']?>&lahan=<?=$lahan ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-warning">
                            <i class="glyphicon glyphicon-edit"> </i></a>&nbsp;
                            <a href="../data_tanaman/delete_tanaman.php?id=<?=$data['id_tanaman'] ?>&kd_lahan=<?=$data['kd_lahan'] ?>&lahan=<?=$lahan ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-danger" onclick="return confirm('Yakin ingin meghapus data ?')" >
                            <i class="glyphicon glyphicon-trash"> </i></a>&nbsp;
                        </td>
                        </tr>
                        <?php }}

                        else{
                            echo "<tr><td colspan=\"7\" align=\"center\">Data tidak temukan</td></tr>";
                        } ?>
                      </tbody>
                      </table>
                    </div>
                    <!-- Akhir table -->
                  </div>
                  <!-- Akhir tab tanaman -->
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Akhir Detail -->
    </div>
  </div>
  <?php include_once "../footer.php"; ?>
