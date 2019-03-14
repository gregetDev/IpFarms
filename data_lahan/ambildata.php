<?php
include "../config/koneksi.php";

$Q = mysqli_query($koneksi, "SELECT * FROM tb_lahan")or die(mysql_error($koneksi));
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
        while($post = mysqli_fetch_assoc($Q)){
                $posts[] = $post;
        }
      }
      $data = json_encode(array('results'=>$posts));
      echo $data;
}

?>
