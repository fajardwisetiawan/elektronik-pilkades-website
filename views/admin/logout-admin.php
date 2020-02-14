<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <meta charset="utf-8">
	 <script type="text/javascript" src="../../assets/vendors/sweetalert/sweetalert.min.js"></script>
 </head>
</html>
<?php
    include('session.php');
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
    echo '<script language="javascript">swal("Logout Sukses!","Anda Telah Logout!","success").then(() => { window.location="login-admin.php"; });</script>';
	exit;
?>
