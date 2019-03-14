<?php
$title ="Setting";
include_once "config/koneksi.php";
include_once "header.php";

?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel-dashboard">
            <div class="panel-heading centered">
                <h2 class="panel-title"><strong> - Update Data - </strong></h2>
            </div>
            <div class="panel-body">
                
                <?php if ($_SESSION['sessPass']=='1'){?>
                    <div class="alert alert-danger">
                        Password lama Anda salah
                    </div>
                <?php } ?>
                <?php if ($_SESSION['sessPass']=='2'){?>
                    <div class="alert alert-danger">
                        Password baru tidak sama dengan konfirmasi password
                    </div>
                <?php } ?>
                <?php if ($_SESSION['sessPass']=='3'){?>
                    <div class="alert alert-success">
                        Password berhasil diubah
                    </div>
                <?php } ?>
                <?php ($_SESSION['sessPass'] =0); ?>

                <form role="form" action="setting.php" method="POST">
                    <div class="form-group">
                        <label for="">Password Lama</label>
                        <input class="form-control input-text" name="password_lama" type="password" placeholder="Masukan username">
                    </div>
                    <div class="form-group">
                        <label for="">Password Baru</label>
                        <input class="form-control input-text" name="password_baru" type="password" placeholder="Masukan password Baru">
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password Baru</label>
                        <input class="form-control input-text" name="konfirmasi" type="password" placeholder="Konfirmasi password Baru">
                    </div>

                    <div class="form-group text-center">
                        <input name="update" type="submit" class="btn btn-success" value="Update Data">
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
                <?php 
                    if (isset($_POST['update'])){

                        $pw_lama = trim(mysqli_real_escape_string($koneksi, $_POST['password_lama']));
                        $pw_baru = trim(mysqli_real_escape_string($koneksi, $_POST['password_baru']));
                        $konfirmasi = trim(mysqli_real_escape_string($koneksi, $_POST['konfirmasi']));
                        
                        $user = mysqli_query($koneksi, "SELECT * FROM tb_user ")or die(mysqli_error($koneksi));
                        $data = mysqli_fetch_array($user);

                        
                        if ($data['password'] != $pw_lama)
                        {
                            $_SESSION['sessPass'] = 1;
                            
                            echo "<script>window.location='".base_url('setting.php')."';</script>";
                        }
                        else{ 
                            if ($pw_baru != $konfirmasi)
                            {
                                $_SESSION['sessPass'] = 2;
                                
                                echo "<script>window.location='".base_url('setting.php')."';</script>";
                            }
                            else
                            {
                                mysqli_query($koneksi, "UPDATE tb_user SET password = '$pw_baru'  WHERE password = '$pw_lama' ") or die (mysqli_error($koneksi));
                                
                                $_SESSION['sessPass'] = 3;
                                
                                echo "<script>window.location='".base_url('setting.php')."';</script>";
                            }
                            
                        }
                    
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</div> 
<?php include_once "footer.php" ?>
