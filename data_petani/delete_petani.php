<?php include_once "../config/koneksi.php";

  mysqli_query($koneksi, "DELETE FROM tb_petani WHERE id_petani = '$_GET[id]'") or die (mysqli_error($koneksi));
  $lahan = $_GET['lahan'];
  echo "<script>window.location='../data_lahan/detail.php?id=$_GET[kd_lahan]&lahan=$lahan#petani';</script>";
?>
