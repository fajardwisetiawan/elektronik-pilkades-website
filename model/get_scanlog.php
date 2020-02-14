<?php

require '../server/koneksi.php';
$sqldev = mysqli_query($connect,"SELECT * FROM tb_device");

function webservice($port,$url,$parameter){
	$curl = curl_init();
	set_time_limit(0);
	curl_setopt_array($curl, array(
		CURLOPT_PORT => $port,
		CURLOPT_URL => "http://".$url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => $parameter,
		CURLOPT_HTTPHEADER => array(
			"cache-control: no-cache",
			"content-type: application/x-www-form-urlencoded"
			),
		)
	);
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);
	if ($err) {
		$response = ("Error #:" . $err);
	}
	else
	{
		$response;
	}
	return $response;
}

$scan = mysqli_query($connect,"SELECT * FROM tb_scanlog");
$vscan = mysqli_num_rows($scan);
$vpin = mysqli_fetch_object($scan);
$get_pins = $vpin->pin;
if($vscan>0){
	$ceked = mysqli_query($connect,"SELECT * FROM tb_cek WHERE pin='$get_pins'");
	$vceked = mysqli_num_rows($ceked);
	if($vceked>0){
		mysqli_query ($connect,"DELETE FROM tb_scanlog");
		$output = '<a href="#" class="btn-get-started">ANDA SUDAH MELAKUKAN PEMILIHAN</a>';
	}else {
		$output = '<a href="#" class="btn-get-started">SILAHKAN KE BILIK SUARA</a>';
	}
	
}else {
	if($datadev = mysqli_fetch_array($sqldev)) {

		/*if((isset($_POST['b_allScan'])) or (isset($_POST['b_delScan'])) or (isset($_POST['b_getNewScan']))){	
			if(isset($_POST['b_allScan'])){
				$url = $datadev[server_IP]."/scanlog/all/paging";
			}elseif (isset($_POST['b_delScan'])){
				$url = $datadev[server_IP]."/scanlog/del";
			}elseif (isset($_POST['b_getNewScan'])){
				$url = $datadev[server_IP]."/scanlog/new";
			}		
		}*/
		
		$sn = $datadev['device_sn'];
		$port = $datadev['server_port'];
		$parameter = "sn=".$sn;
		
		
		
			$url = $datadev[server_IP]."/scanlog/new";
			$parameter = "sn=".$sn;
			$server_output = webservice($port,$url,$parameter);
			
			$content = json_decode($server_output);
			
			foreach ($content as $key => $value) {
				if ((!is_array($value)) and ($value==1)) {
				
					foreach($content->Data as $entry){
						$Jsn = $entry->SN;
						$Jsd = $entry->ScanDate;
						$Jpin = $entry->PIN;
						$Jvm = $entry->VerifyMode;
						$Jim = $entry->IOMode;
						$Jwc = $entry->WorkCode;
						$sqlinsertscan	= 'insert into tb_scanlog (sn,scan_date,pin,verifymode,iomode,workcode) values ("'.$Jsn.'","'.$Jsd.'","'.$Jpin.'","'.$Jvm.'","'.$Jim.'","'.$Jwc.'")';
						$queryinsert	= mysqli_query($GLOBALS["___mysqli_ston"], $sqlinsertscan);
						if($queryinsert){
							$length = 1;

							$randomletter = substr(str_shuffle("ab"), 0, $length);

							if($randomletter == 'a'){
								mysqli_query($connect,"UPDATE tb_bilik SET status=1 WHERE bilik='A'");
							}elseif ($randomletter == 'b'){
								mysqli_query($connect,"UPDATE tb_bilik SET status=1 WHERE bilik='B'");
							}
						}else{
							}
					}
				}elseif((!is_array($value)) and (!$value==1)) {
					$output = '<a href="#" class="btn-get-started">LAKUKAN VERIFIKASI DATA</a>';
				}
			}
} 
     
    }
	$data = array(
		'output' => $output
	 );
	 echo json_encode($data);
?>