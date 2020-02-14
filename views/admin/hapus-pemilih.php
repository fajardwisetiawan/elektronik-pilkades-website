<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
	 <meta charset="utf-8">
	 <script type="text/javascript" src="../../assets/vendors/sweetalert/sweetalert.min.js"></script>
 </head>
</html>
<?php
include('../../server/koneksi.php');
// include('session.php');

function antiinjection($data){
    $filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
    return $filter_sql;
}

$id_pemilih = antiinjection($_GET['id_pemilih']);

	 $qy = mysqli_query($connect, "DELETE FROM tb_pemilih WHERE id_pemilih = '$id_pemilih'");
			if($qy){
			    echo '<script language="javascript">swal("Hapus berhasil!", "Data pemilih talah terhapus!", "success").then(() => {  window.location="pemilih.php"; });</script>';
			}else{
					echo '<script language="javascript">swal("Hapus gagal!", "Data pemilih gagal terhapus!", "error").then(() => { window.history.back(); });</script>';
			}

?>