<?php

require '../server/koneksi.php';

$sqldev = mysqli_query($connect,"SELECT * FROM tb_scanlog");
$row = mysqli_num_rows($sqldev);
if($row>0){
	$cek = mysqli_query($connect,"SELECT * FROM tb_bilik WHERE bilik='B' AND status=1");
	$cek1 = mysqli_num_rows($cek);

	if($cek1>0){
				$scan = mysqli_query($connect,"SELECT * FROM tb_scanlog");
		$vscan = mysqli_num_rows($scan);
		$vpin = mysqli_fetch_object($scan);
		$get_pins = $vpin->pin;
		if($vscan>0){
			$ceked = mysqli_query($connect,"SELECT * FROM tb_cek WHERE pin='$get_pins'");
			$vceked = mysqli_num_rows($ceked);
			if($vceked>0){
				$output = '<a href="#" class="btn-get-started" disabled>TIDAK BOLEH MENCOBLOS LAGI</a>';
			$status = 0;
			$url = " ";
			}else {
				$datadev = mysqli_fetch_object($sqldev);
				$pin = $datadev->pin;
				$output = '<a href="bilik.php?pin='.$pin.'" class="btn-get-started">LAKUKAN PEMILIHAN</a>';
				$status = 1;

				$url = "bilik.php?pin=".$pin."&&status=login";
			}
			
		}
		
	}else {
		$output = '<a href="#" class="btn-get-started" disabled>BELUM MELAKUKAN VERIFIKASI DATA</a>';
			$status = 0;
			$url = " ";
	}
	// if($randomletter == 'a'){
	// 	mysqli_query($connect,"UPDATE tb_bilik SET status=1 WHERE bilik='A'");
	// }elseif ($randomletter == 'b'){
	// 	mysqli_query($connect,"UPDATE tb_bilik SET status=1 WHERE bilik='B'");
	// }
	// $datadev = mysqli_fetch_object($sqldev);
	// $pin = $datadev->pin;
	// $output = '<a href="bilik.php?pin='.$pin.'" class="btn-get-started">LAKUKAN PEMILIHAN</a>';
	// $status = 1;

	// $url = "bilik.php?pin=".$pin."&&status=login";
	
	//header('location:bilik.php?pin='.$datadev['pin']);
    

}else {
	$output = '<a href="#" class="btn-get-started" disabled>BELUM MELAKUKAN VERIFIKASI DATA</a>';
		$status = 0;
		$url = " ";
}
 $data = array(
			'output' => $output,
			'status' =>$status,
			'url' => $url
         );
         echo json_encode($data);
?>