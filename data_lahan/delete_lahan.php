<?php include_once "../config/koneksi.php";

  mysqli_query($koneksi, "DELETE FROM tb_lahan WHERE id_lahan = '$_GET[id]'") or die (mysqli_error($koneksi));
  echo "<script>window.location='".base_url('data_lahan/data.php')."';</script>";

?>
