<?php
$title = "Peta Persebaran Lahan";
include_once "header.php";
?>

      <div class="row">

        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABrmz3R6seMOs8masfTdY-OzcRL_b35QE&callback=initMap" type="text/javascript"></script>


<script type="text/javascript">
  function initMap() {

    var mapOptions = {
        zoom: 16,
        center: new google.maps.LatLng(-6.7990333, 107.6529147),
        disableDefaultUI: true
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, officeLocations);

}

var officeLocations = [
<?php
$data = file_get_contents('http://localhost/ipfarms/data_lahan/ambildata.php');
    
    if(json_decode($data)){
        $obj = json_decode($data);
        foreach($obj->results as $item){
?>
['<?php echo $item->id_lahan ?>','<?php echo $item->nama_lahan ?>','<?php echo $item->jenis_tanah ?>', <?php echo $item->latitude ?>, <?php echo $item->longitude ?>],
<?php
}
}
?>
];

function setMarkers(map, locations)
{
    var globalPin = 'img/marker.png';

    for (var i = 0; i < locations.length; i++) {

        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[3], office[4]);
        var infowindow = new google.maps.InfoWindow({content: contentString});

        var contentString =
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
            '<div id="bodyContent">'+
            '<a href=data_lahan/detail.php?id='+office[0]+'&lahan='+ office[1]+'>Info Detail</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            icon:'img/marker.png'
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content);
            infowindow.open(map, this);
        };
}

initMap();
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php include_once "footer.php"; ?>
