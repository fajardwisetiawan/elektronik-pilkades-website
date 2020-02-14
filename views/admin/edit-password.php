<?php
@session_start();
include('../../server/koneksi.php');
include('session.php');
$qy = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_admin WHERE id_user = '$_SESSION[id_user]'"));
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
    <title>Admin - Pemilihan Kepala Desa</title>
    <?php include "../../include/admin/css.php" ?>
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <?php include "../../include/admin/header.php" ?>
  <?php include "../../include/admin/sidebar.php" ?>

<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-header row"></div>
				<div class="content-body"><!-- Stats -->
						<section id="base-style">
								<div class="row">
									<div class="col-12">
											<div class="card">
													<div class="card-header">
														<h3 class="panel-title"> <i class="icon-users"></i> Ubah Password Admin</h3>
														<p class="panel-subtitle">Halaman untuk mengubah password admin</p>
													</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-md-12">
																<form class="" enctype="multipart/form-data" action="update-password.php" method="post">
																	<div class="modal-body">
																			<div class="form-group">
																				<label class="nk-label">Username</label>
																				<input type="text" class="form-control input-md" name="username" placeholder="Masukkan Username" required>
																			</div>
																			<div class="form-group">
																				<label class="nk-label">Password Lama</label>
																				<input type="text" class="form-control input-md" name="password_lama" placeholder="Masukkan Password Lama" required>
																			</div>
																			<div class="form-group">
																				<label class="nk-label">Password Baru</label>
																				<input type="text" class="form-control input-md" id="password1" name="password_baru" placeholder="Masukkan Password Baru" required>
																			</div>
																			<div class="form-group">
																				<label class="nk-label">Konfirmasi Password</label>
																				<input type="text" class="form-control input-md" id="password2" name="konfirmasi_password" placeholder="Masukkan Kembali Password Baru" required>
																			</div>
																	</div>
																	<div class="modal-footer">
																			<button type="submit" class="btn btn-default">Save changes</button>
																			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<!-- END OVERVIEW -->
											</div>
										</div>
										<!-- END MAIN CONTENT -->
									</div>
									</div>
									</div>
								</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<!-- END MAIN -->
				<?php include "../../include/admin/javascript.php" ?>
			</body>
		<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 00:38:38 GMT -->
		</html>
