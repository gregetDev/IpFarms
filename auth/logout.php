<?php include_once "../config/koneksi.php";

UNSET ($_SESSION['user']);
echo "<script>window.location ='".base_url('auth/login.php')."';</script>";
?>
