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

$id_calon = antiinjection($_GET['id_calon']);

$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_calon WHERE id_calon ='$id_calon'"));

if(is_file("../../image/".$data['foto']))
	 unlink("../../image/".$data['foto']);

	 $qy = mysqli_query($connect, "DELETE FROM tb_calon WHERE id_calon = '$id_calon'");
			if($qy){
			    echo '<script language="javascript">swal("Hapus berhasil!", "Data calon talah terhapus!", "success").then(() => {  window.location="calon.php"; });</script>';
			}else{
					echo '<script language="javascript">swal("Hapus gagal!", "Data calon gagal terhapus!", "error").then(() => { window.history.back(); });</script>';
			}

?>