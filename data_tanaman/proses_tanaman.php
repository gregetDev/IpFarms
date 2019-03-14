<?php include_once "../config/koneksi.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  if (isset($_POST['add'])){
    $lahan = $_GET['lahan'];
    $uuid = Uuid::uuid4();
    $kd_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['kd_lahan']));
    $nama_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lahan']));
    $nama_tanaman = trim(mysqli_real_escape_string($koneksi, $_POST['nama_tanaman']));
    $jenis_tanaman = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_tanaman']));
    $tanggal = trim(mysqli_real_escape_string($koneksi, date('Y-m-d')));
    $tanggal_tanam = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_tanam']));
    $tanggal_panen = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_panen']));

    mysqli_query($koneksi, "INSERT INTO tb_tanaman (id_tanaman, kd_lahan, nama_lahan, nama_tanaman, jenis_tanaman, tanggal, tanggal_tanam, tanggal_panen) VALUES ('$uuid', '$kd_lahan','$nama_lahan','$nama_tanaman', '$jenis_tanaman', '$tanggal', '$tanggal_tanam', '$tanggal_panen')") or die (mysqli_error($koneksi));

    echo "<script>window.location='add_tanaman.php?id=$kd_lahan&lahan=$lahan';</script>";

  }else if (isset($_POST['edit'])){
    $id = $_POST['id_tanaman'];
    $lahan = $_GET['lahan'];
    $kd_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['kd_lahan']));
    $nama_tanaman = trim(mysqli_real_escape_string($koneksi, $_POST['nama_tanaman']));
    $jenis_tanaman = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_tanaman']));
    $tanggal = trim(mysqli_real_escape_string($koneksi, date('Y-m-d')));
    $tanggal_tanam = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_tanam']));
    $tanggal_panen = trim(mysqli_real_escape_string($koneksi, $_POST['tanggal_panen']));

    mysqli_query($koneksi, "UPDATE tb_tanaman SET kd_lahan = '$kd_lahan', nama_tanaman = '$nama_tanaman', tanggal = '$tanggal', jenis_tanaman = '$jenis_tanaman', tanggal_tanam = '$tanggal_tanam', tanggal_panen = '$tanggal_panen' WHERE id_tanaman = '$id'") or die (mysqli_error($koneksi));

    echo "<script>window.location='../data_lahan/detail.php?id=$kd_lahan&lahan=$lahan#petani';</script>";
  }

?>
