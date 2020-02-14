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

$id_pemilih = antiinjection($_POST['id_pemilih']);
$pin = antiinjection($_POST['pin']);
$nik = antiinjection($_POST['nik']);
$nama = antiinjection($_POST['nama']);
$tempat_lahir = antiinjection($_POST['tempat_lahir']);
$tgl_lahir = antiinjection($_POST['tgl_lahir']);
$jk = antiinjection($_POST['jk']);
$agama = antiinjection($_POST['agama']);
$no_telp = antiinjection($_POST['no_telp']);
$status_kawin = antiinjection($_POST['status_kawin']);
$pekerjaan = antiinjection($_POST['pekerjaan']);
$alamat = antiinjection($_POST['alamat']);
$rt = antiinjection($_POST['rt']);
$rw = antiinjection($_POST['rw']);
$desa = antiinjection($_POST['desa']);
$kecamatan = antiinjection($_POST['kecamatan']);
$kabupaten = antiinjection($_POST['kabupaten']);
$provinsi = antiinjection($_POST['provinsi']);

if (isset($_POST['ubah_foto'])) {
	if($_FILES['foto']['name']!='')
	{
		$target_dir = "../../image/";
		$target_file = $target_dir . basename($nik . "-" . $_FILES["foto"]["name"]);
    	$fotobaru = $nik . "-" . $_FILES["foto"]["name"];

		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


		// gambar 1
		$check = getimagesize($_FILES["foto"]["tmp_name"]);
		if($check !== false) {
				$uploadOk = 1;
		} else {
			echo '<script language="javascript">swal("Simpan gagal!", "File bukan gambar", "warning").then(() => { window.location="pemilih.php"; });</script>';
				$uploadOk = 0;
		}

		// Check file size
		if ($_FILES["foto"]["size"] > 2000000) {
			echo '<script language="javascript">swal("Simpan gagal!", "Gambar tidak boleh lebih dari 2MB", "warning").then(() => { window.location="pemilih.php"; });</script>';
				$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
			echo '<script language="javascript">swal("Simpan gagal!", "Gambar hanya boleh berupa JPG, PNG atau JPEG", "warning").then(() => { window.location="pemilih.php"; });</script>';
				$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo '<script language="javascript">swal("Simpan gagal!", "Foto gagal diupload!", "warning").then(() => { window.location="pemilih.php"; });</script>';
		// if everything is ok, try to upload file
		} else {
				if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
				} else {
					echo '<script language="javascript">swal("Simpan gagal!", "Foto gagal diupload!", "warning").then(() => { window.location="pemilih.php"; });</script>';
				}
		}
	}

	$data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_pemilih WHERE id_pemilih = '$id_pemilih'"));
		if(is_file("../../image/".$data['foto']))
		unlink("../../image/".$data['foto']);


    mysqli_query($connect, "UPDATE tb_pemilih SET
	pin = '$pin',
	nik = '$nik',
	nama = '$nama',
	tempat_lahir = '$tempat_lahir',
	tgl_lahir = '$tgl_lahir', 
	jk = '$jk',
	agama = '$agama',
	no_telp = '$no_telp',
	status_kawin = '$status_kawin',
	pekerjaan = '$pekerjaan',
	alamat = '$alamat',
	rt = '$rt', 
	rw = '$rw', 
	desa = '$desa',
	kecamatan = '$kecamatan',
	kabupaten = '$kabupaten',
	provinsi = '$provinsi',	
	foto = '$fotobaru' WHERE id_pemilih = '$id_pemilih'");

	echo '<script language="javascript">swal("Update berhasil!", "Data pemilih telah terupdate", "success").then(() => { window.location="pemilih.php"; });</script>';
	
}else{

	mysqli_query($connect, "UPDATE tb_pemilih SET
    pin = '$pin',
	nik = '$nik',
	nama = '$nama',
	tempat_lahir = '$tempat_lahir',
	tgl_lahir = '$tgl_lahir', 
	jk = '$jk',
	agama = '$agama',
	no_telp = '$no_telp',
	status_kawin = '$status_kawin',
	pekerjaan = '$pekerjaan',
	alamat = '$alamat',
	rt = '$rt', 
	rw = '$rw', 
	desa = '$desa',
	kecamatan = '$kecamatan',
	kabupaten = '$kabupaten',
	provinsi = '$provinsi' WHERE id_pemilih = '$id_pemilih'");

	echo '<script language="javascript">swal("Update berhasil!", "Data pemilih telah terupdate", "success").then(() => { window.location="pemilih.php"; });</script>';
	
}	


?>
