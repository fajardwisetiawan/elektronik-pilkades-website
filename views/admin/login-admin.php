<?php
@session_start();
include('../../server/koneksi.php');
// include('session.php');

// if(@$_SESSION['username']) {
//   header('location:index.php');
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - Pemilihan Kepala Desa</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include "../../include/admin/css.php" ?>

<!-- Load librari/plugin jquery nya -->
<script src="../../jquery.min.js" type="text/javascript"></script>

<!-- Load File javascript config.js -->
<script src="c../../config.js" type="text/javascript"></script>

</head>
<body class="horizontal-layout horizontal-menu 1-column   menu-expanded blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                          <div class="p-1"><img style="width:100px;height:95px;" src="../../assets/images/logo/banyumas.png" alt="branding logo"></div>
                          <h3 class="brand-text">DESA LINGGASARI</h3></a>
                          <h5 class="brand-text">KEC. KEMBARAN, KAB. BANYUMAS</h5></a>
                          <small class="brand-text">JL. RAYA LARANGAN - (53182)</small></a>
                      </div>
                      <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login Administrator</span></h6>
                  </div>

                <div class="card-content">
                    <div class="card-body">

				<form class="login100-form validate-form" method="post" action="login_proses.php">
					<fieldset class="form-group position-relative has-icon-left mb-0">
					<div class="wrap-input100 validate-input" data-validate = "Login Failed">
						<input type="text" class="form-control form-control-lg" name="username" placeholder="Masukan Username">
						<div class="form-control-position">
                           <i class="ft-user"></i>
						   </div>
					</fieldset>
					<br>
					<fieldset class="form-group position-relative has-icon-left">
					<div class="wrap-input100 validate-input" data-validate = "Login Failed">
					<input type="password" class="form-control form-control-lg" name="password" placeholder="Masukan Password">
					<div class="form-control-position">
                           <i class="fa fa-key"></i>
                           </div>
                    <br>
                    </fieldset>

					<div class="container-login100-form-btn">
						<button type="submit" class="btn btn-secondary btn-lg btn-block">
						<i class="ft-unlock"></i>
							 Login
						</button>
					</div>
					<br>
					<br>

					<div class="text-center p-t-12">

					</div>
				</form>
			</div>
		</div>
	</div>


    <script src="../../assets/vendors/js/vendors.min.js"></script>
    <script type="text/javascript" src="../../../assets/vendors/js/ui/jquery.sticky.js"></script>
    <script type="text/javascript" src="../../../assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="../../../assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="../../../assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="../../../ssets/js/core/app-menu.min.js"></script>
    <script src="../../../assets/js/core/app.min.js"></script>
    <script type="text/javascript" src="../../../assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
    <script src="../../../-assets/js/scripts/forms/form-login-register.min.js"></script>

</script>

<script >
  $('.js-tilt').tilt({
    scale: 1.1
  })
</script>
    <script src="../login/js/main.js"></script>

</body>
</html>
