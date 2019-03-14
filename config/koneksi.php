<?php

//setingg default time zone
date_default_timezone_set('Asia/Jakarta');
session_start();

//koneksi
$koneksi = mysqli_connect('localhost','root','','database_sistem');
if (mysqli_connect_errno()) {
  echo mysqli_connect_error();
}

//fungsi base url
function base_url($url = null){
  $base_url="http://localhost/ipfarms";
  if($url != null){
    return $base_url."/".$url;
  }else {
    return $base_url;
  }
}
  
?>
