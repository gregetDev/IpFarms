<?php
include "../config/koneksi.php";
$id = $_GET['id'];
$Q = mysqli_query($koneksi, "SELECT * FROM tb_lahan WHERE id_lahan=\"$id\"")or die(mysqli_error($koneksi));
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }
      $data = json_encode(array('results'=>$posts));
}

?>
