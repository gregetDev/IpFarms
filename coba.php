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

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABrmz3R6seMOs8masfTdY-OzcRL_b35QE&callback=initMap" type="text/javascript"></script>

<script>
    function initMap() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
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

  
google.maps.event.addDomListener(window, 'load', initialize);
}

</script>