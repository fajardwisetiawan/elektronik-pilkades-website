<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <meta charset="utf-8">
	 <script type="text/javascript" src="../../assets/vendors/sweetalert/sweetalert.min.js"></script>
 </head>
</html>
<?php
include('../../server/koneksi.php');
session_start();
// include('session.php');

// function antiinjection($data){
// 	$filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
//   	return $filter_sql;
// }
$username = mysqli_real_escape_string($connect,$_POST['username']);
$password = mysqli_real_escape_string($connect,$_POST['password']);
// $username = $_POST['username'];
// $pass = antiinjection(md5($_POST['password']));
// $pass = $_POST['password'];

$sql=mysqli_query($connect, "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");
$r=mysqli_fetch_array($sql);

if (empty($username) || empty($password)) {
	echo '<script language="javascript">swal("Gagal login!", "Username atau password Kosong!", "error").then(() => { window.location="login-admin.php"; });</script>';
}
else {
	if ($r['username']==$username and $r['password']==$password){

		@$_SESSION['username']=$r['username'];
		@$_SESSION['password']=$r['password'];
		
		echo '<script language="javascript">swal("Login berhasil!", "Silahkan Masuk!", "success").then(() => { window.location="index.php"; });</script>';
		
		}else{
		echo '<script language="javascript">swal("Login Gagal!", " Silahkan cek lagi username dan password anda!", "error").then(() => { window.location="login-admin.php"; });</script>';
		}
}






?>
