<?php include ("../../server/koneksi.php");
 $pin = $_GET['pin'];
 mysqli_query($connect,"DELETE FROM `get_pencoblos` WHERE pin='$pin'");

 if(empty($_GET['status'])){
     header('location:../bilik/');
 }
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  
<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 00:36:40 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Bilik - Pemilihan Kepala Desa</title>
    <?php include "../../include/admin/css.php" ?>
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout 2-columns  menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-dark navbar-shadow">
      <div class="navbar-wrapper">
     
      <div class="p-2  text-center white media-body">
      <h4 class="text-bold-400 mb-0">PEMILIHAN KEPALA DESA</h4>
      <h5 class="text-bold-400 mb-0">BILIK SUARA</h5>
      <br/>
      <?php
        $datas = mysqli_query ($connect, "SELECT * FROM tb_pemilih WHERE pin='$pin'");
        $datass = mysqli_fetch_object($datas);
        $nama = $datass -> nama;
        $rw = $datass -> rw;
      ?>
      <h6 class="text-bold-400 mb-0">Selamat Datang &nbsp; <strong></strong><?= $nama;?> </h6>
                    </div>
      </div>
    </nav>

    <!----- --->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
                <div class="content-body" style="margin-top:45px;"><!-- Stats -->
                    <div class="row" >
                        <?php
                            $qy2 = mysqli_query($connect, "SELECT * FROM tb_calon ORDER BY no_urut ASC");
                            while($qy = mysqli_fetch_array($qy2)){
                        ?>
                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="card border-teal border-lighten-2">
                                <div class="text-center">
                                    <div class="card-body">
                                        <?php if($qy['foto'] == ''){ ?>
                                            <input type="image" src="../../logo/avatar0.jpg" class="rounded-circle width-150 height-150" alt="Card image" onclick="window.location.href='../../library/example/interface/windows-usb.php?no_urut=<?= $qy['no_urut'] ?>&&nama=<?= $qy['nama'] ?>'"/>
                                         <?php }else{ ?>
                                        <div class="hd-message-img">
                                            <input type="image" src="../../image/<?= $qy['foto']; ?>" class="rounded-circle width-150 height-150" alt="Card image" onclick="window.location.href='../../library/example/interface/windows-usb.php?no_urut=<?= $qy['no_urut'] ?>&&pin=<?= $pin; ?>&&id_calon=<?= $qy['id_calon'] ?>&&nama=<?= $qy['nama'] ?>&&qr=<?= $qy['qr'] ?>&&rw=<?= $rw; ?>'"/>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">No Urut. <?= $qy['no_urut'] ?></h4>
                                        <h4 class="card-title"><?= $qy['nama'] ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                        <div class="col-xl-6 col-md-6 col-12">
                            <div class="card border-teal border-lighten-2">
                                <div class="text-center">
                                    <div class="card-body">                   
                                        <!-- <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Tambah
                                        </button> -->
                                        <input type="image" src="../../logo/avatar0.jpg" class="rounded-circle width-150 height-150" alt="Card image" onclick="window.location.href='../../library/example/interface/golput.php?pin=<?= $pin; ?>&&rw=<?= $rw; ?>'"/>
                                    </div> 
                                    <div class="card-body">
                                        <h4 class="card-title">Tidak Memilih</h4>
                                        <h4 class="card-title">Ini Tidak DIsarankan!</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
    
  <?php include "../../include/admin/javascript.php" ?>
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 00:38:38 GMT -->
</html>