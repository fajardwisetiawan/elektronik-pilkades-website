<?php 

require '../server/koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_tgl_lahir = $_POST['tempat_tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$status_kawin = $_POST['status_kawin'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
	
$sql = "INSERT INTO tb_pemilih (id_pemilih,nik,nama,tempat_tgl_lahir,jenis_kelamin,agama,status_kawin,pekerjaan,alamat) VALUES (null, '$nik','$nama','$tempat_tgl_lahir','$jenis_kelamin','$agama','$status_kawin','$pekerjaan','$alamat')";
$conn->query($sql);

?>