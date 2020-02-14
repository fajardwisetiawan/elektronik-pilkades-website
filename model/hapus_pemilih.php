<?php
	
require '../server/koneksi.php';
 
	$id_pemilih = $_POST['id_pemilih'];
 
	$conn->query("DELETE FROM `tb_pemilih` WHERE `id_pemilih` = '$id_pemilih'");
?>