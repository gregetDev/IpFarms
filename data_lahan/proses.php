<?php include_once "../config/koneksi.php";
require "../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;


  if (isset($_POST['add'])){

    $uuid = Uuid::uuid4();
    $kd_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['kd_lahan']));
    $nama_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lahan']));
    $jenis_tanah = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_tanah']));
    $panjang = trim(mysqli_real_escape_string($koneksi, $_POST['panjang']));
    $lebar = trim(mysqli_real_escape_string($koneksi, $_POST['lebar']));
    $latitude = trim(mysqli_real_escape_string($koneksi, $_POST['latitude']));
    $longitude = trim(mysqli_real_escape_string($koneksi, $_POST['longitude']));
    $tanggal = trim(mysqli_real_escape_string($koneksi, date('Y-m-d')));

    $luas = ($panjang * $lebar);

    mysqli_query($koneksi, "INSERT INTO tb_lahan (id_lahan, kd_lahan, nama_lahan, jenis_tanah, panjang, lebar, luas, latitude, longitude, tanggal) VALUES ('$uuid','$kd_lahan','$nama_lahan','$jenis_tanah','$panjang','$lebar', '$luas','$latitude','$longitude','$tanggal')") or die (mysqli_error($koneksi));
    echo "<script>window.location='".base_url('data_lahan/add_lahan.php')."';</script>";


  }else if (isset($_POST['edit'])){
    $id = $_POST['id'];
    $kd_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['kd_lahan']));
    $nama_lahan = trim(mysqli_real_escape_string($koneksi, $_POST['nama_lahan']));
    $jenis_tanah = trim(mysqli_real_escape_string($koneksi, $_POST['jenis_tanah']));
    $panjang = trim(mysqli_real_escape_string($koneksi, $_POST['panjang']));
    $lebar = trim(mysqli_real_escape_string($koneksi, $_POST['lebar']));
    $latitude = trim(mysqli_real_escape_string($koneksi, $_POST['latitude']));
    $longitude = trim(mysqli_real_escape_string($koneksi, $_POST['longitude']));
    $tanggal = trim(mysqli_real_escape_string($koneksi, date('Y-m-d')));
    $luas = ($panjang * $lebar);

    mysqli_query($koneksi, "UPDATE tb_lahan SET kd_lahan = '$kd_lahan', nama_lahan = '$nama_lahan', jenis_tanah = '$jenis_tanah', panjang = '$panjang',lebar = '$lebar',luas = '$luas', latitude = '$latitude', longitude = '$longitude ', tanggal = '$tanggal ' WHERE id_lahan = '$id'") or die (mysqli_error($koneksi));

    echo "<script>window.location='".base_url('data_lahan/data.php')."';</script>";

  }

?>
