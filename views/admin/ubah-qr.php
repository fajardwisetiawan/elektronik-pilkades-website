<?php include ("../../server/koneksi.php");
$qy = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_calon WHERE id_calon = '$_POST[id_calon]'")); 
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
    <title>Dashboard eCommerce - Stack Responsive Bootstrap 4 Admin Template</title>
    <?php include "../../include/admin/css.php" ?>
	<!-- END Custom CSS-->
	<style>
      .img-container {
        text-align: center;
      }
    </style>
</head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <?php include "../../include/admin/header.php" ?>
  <?php include "../../include/admin/sidebar.php" ?>

    <!----- --->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
			<div class="content-body"><!-- Stats -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title" id="from-actions-top-left">Ubah Data Calon</h4>
								<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
								<div class="heading-elements">
									<ul class="list-inline mb-0">
										<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="card-content collpase show">
								<div class="card-body">
									<div class="card-text">
									</div>
									<form class="" enctype="multipart/form-data" action="update-calon.php" method="post">
										<div class="form-body">
										<h4 class="form-section"><i class="fa fa-qrcode"></i> QR Code</h4>
											<br>
											<div class="row">
												<div class="form-group col-12 mb-2 img-container" >
													<?php if($qy['qr'] == ''){ ?>
														<img src="../../logo/avatar0.jpg" class="img-circle" width="150px" alt="image" />
													<?php }else{ ?>
													<div class="hd-message-img img-container">
														<img src="../../image_qr/<?= $qy['qr']; ?>" class="img-circle" width="150px" alt="image" />
													</div>
													<br>
													<?php } ?>
													</div>
													<br>
													<div class="form-group col-12 mb-2" style="margin-top: -20px;">
															<input type="file" accept="image/*" name="foto" class="form-control" id="foto1" required>
													</div>
											</div>
											<br>
											<hr color="#000">
											<br>
											<button type="submit" class="btn btn-primary">
												<i class="fa ft-edit"></i> Ubah
											</button>
										</div>
									</form>
									

								</div>
								
							</div>
						</div>
				</div>
			</section>
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