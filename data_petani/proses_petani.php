<?php include_once "../config/koneksi.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

  if (isset($_POST['add'])){
    $lahan = $_GET['lahan'];
    $uuid = Uuid::uuid4();
    $kd_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['kd_lahan']));
    $nama_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lahan']));
    $nama_petani = trim(mysqli_real_escape_string($koneksi, $_POST['nama_petani']));
    $no_hp = trim(mysqli_real_escape_string($koneksi, $_POST['no_hp']));
    $tanggal = trim(mysqli_real_escape_string($koneksi, date('Y-m-d')));

    mysqli_query($koneksi, "INSERT INTO tb_petani (id_petani, kd_lahan, nama_lahan, nama_petani, no_hp, tanggal) VALUES ('$uuid', '$kd_lahan', '$nama_lahan', '$nama_petani','$no_hp', '$tanggal')") or die (mysqli_error($koneksi));

    echo "<script>window.location='add_petani.php?id=$kd_lahan&lahan=$lahan';</script>";
  }else if (isset($_POST['edit'])){
    $id = $_POST['id_petani'];
    $lahan = $_GET['lahan'];
    $kd_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['kd_lahan']));
    $nama_petani = trim(mysqli_real_escape_string($koneksi, $_POST['nama_petani']));
    $no_hp = trim(mysqli_real_escape_string($koneksi, $_POST['no_hp']));
    $tanggal = trim(mysqli_real_escape_string($koneksi, date('Y-m-d')));

    mysqli_query($koneksi, "UPDATE tb_petani SET kd_lahan = '$kd_lahan', nama_petani = '$nama_petani', no_hp = '$no_hp', tanggal = '$tanggal' WHERE id_petani = '$id'") or die (mysqli_error($koneksi));

    echo "<script>window.location='../data_lahan/detail.php?id=$kd_lahan&lahan=$lahan';</script>";
  }

?>
