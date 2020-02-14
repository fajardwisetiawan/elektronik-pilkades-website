<?php
include('../../server/koneksi.php');

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
function viewUser(){
	include 'koneksidb.php';
	$sqluser = mysqli_query($conn,"SELECT * FROM tb_user order by pin ASC");
	$jml = mysqli_num_rows($sqluser);
	echo'
	<h3>Data User <span class="badge">'.$jml.'</span></h3>';
	while($datauser = mysqli_fetch_array($sqluser))
	{
		$idUser = $datauser['pin'];
		echo "
		<td>".$idUser."</td>
		<td>".$datauser['nama']."</td>
		<td>".$datauser['pwd']."</td>
		<td>".$datauser['rfid']."</td>
		<td>".$datauser['privilege']."</td>";
		echo'
		<td>
			<button type="button" class="btn" data-toggle="modal" data-target="#message'.$idUser.'">
			<span class="glyphicon glyphicon glyphicon-eye-open"></span></button>
		</td>
		</tr>
		<div id="message'.$idUser.'" class="modal fade" role="dialog">
			<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
					<!--  <h4 class="modal-title"></h4>-->
					</div>
					<div class="modal-body">
					';
					$sqltemplate = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tb_template where pin=".$idUser );
					while($datatemplate = mysqli_fetch_array($sqltemplate)){
						echo '
						<ul class="list-group">
							<li class="list-group-item">
								<label>PIN : </label>
								<input type="text" class="form-control" value="'.$datatemplate[pin].'" readonly="readonly">
							</li>
							<li class="list-group-item">
								<label>Finger Index : </label>
								<input type="text" class="form-control" value="'.$datatemplate[finger_idx].'" readonly="readonly">
							</li>
							<li class="list-group-item">
								<label>Algoritma Version : </label>
								<input type="text" class="form-control" value="'.$datatemplate[alg_ver].'" readonly="readonly">
							</li>
							<li class="list-group-item">
								<label>Template : </label>
								<textarea class="form-control" readonly="readonly">'.$datatemplate[template].'</textarea>
							</li>
						</ul>
						';
					}
					echo'
					</div>
					<div class="modal-footer">
						<button class="btn btn-info" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>';
	}
	echo '
	</table>
	';
}
function getTemplate($pinT){
	$header = "[";
	$footer = "]";
	$content = "";
	$sqlGetTemp = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tb_template where pin=".$pinT);
	while($dataGetTemp = mysqli_fetch_array($sqlGetTemp)){
		if ($content != ""){
			$content = $content.',';
		}
		$content = $content.'{"pin":"'.$dataGetTemp[pin].'","idx":"'.$dataGetTemp[finger_idx].'","alg_ver":"'.$dataGetTemp[alg_ver].'","template":"'.$dataGetTemp[template].'"}';
	}
	return ($header.$content.$footer);
}

function CreateUserJSON(){

	$startSelect=1;
	$limitDefault=100;
	
	$header = '{"Result":true,"Data":[';
	$footer = "]}";
	$content = "";
	$sqlSetAll = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tb_user");
	
	while($dataSetAll = mysqli_fetch_array($sqlSetAll)){
		if ($content != ""){
			$content = $content.',';
		}
		$content = $content.'{"PIN":"'.$dataSetAll[pin].'","Name":"'.$dataSetAll[nama].'","RFID":"'.$dataSetAll[rfid].'","Password":"'.$dataSetAll[pwd].
							'","Privilege":'.$dataSetAll[privilege].','.GetTemplateAll($dataSetAll[pin]).'}';
	}
	
	return ($header.$content.$footer);
}

function getTemplateAll($pinT){
	$header = '"Template":[';
	$footer = "]";
	$content = "";
	$sqlGetTempAll = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM tb_template where pin=".$pinT);
	while($dataGetTempAll = mysqli_fetch_array($sqlGetTempAll)){
		if ($content != ""){
			$content = $content.',';
		}
		$Temp1 = $dataGetTempAll[template];
		$temp = str_replace('+', '%2B', $Temp1);
		$content = $content.'{"pin":"'.$dataGetTempAll[pin].'","idx":"'.$dataGetTempAll[finger_idx].'","alg_ver":"'.$dataGetTempAll[alg_ver].'","template":"'.$temp.'"}';
	}
	return ($header.$content.$footer);
}




if($datadev = mysqli_fetch_array($sqldev)) {
	$sn = $datadev['device_sn'];
	$port = $datadev['server_port'];
	
	

	
		$session=true;
		$delSession=true;
		$pagingLimit	= $_POST['i_pagingGet'];
		
		while($session){
			
			$parameter = "sn=".$sn."&limit=".$pagingLimit;
			
			$url = $datadev[server_IP]."/user/all/paging";
			$server_output = webservice($port,$url,$parameter);		
			$content = json_decode($server_output);
		
			
			if(($content->Data)>0){	
				
				if($delSession){
					$querydeluser	= mysqli_query($GLOBALS["___mysqli_ston"], "delete from tb_user");
					$querydeltemp	= mysqli_query($GLOBALS["___mysqli_ston"], "delete from tb_template");
					$delSession=false;
				}
						
				if($querydeluser and $querydeltemp){}else{
					echo '<script>alert ("Failed !")</script>';
				}
						
				foreach($content->Data as $entry){
				
					$Jpin = $entry->PIN;
					$Jname = $entry->Name;
					$Jrfid = $entry->RFID;
					$Jpass = $entry->Password;
					$Jpriv = $entry->Privilege;
					$JTemp = $entrytemp->Template;
					$sqlinsertuser	= 'insert into tb_user (pin,nama,pwd,rfid,privilege) values ("'.$Jpin.'","'.$Jname.'","'.$Jpass.'","'.$Jrfid.'","'.$Jpriv.'")';
					$queryinsertuser	= mysqli_query($GLOBALS["___mysqli_ston"], $sqlinsertuser);
					
					if($queryinsertuser){
					}else{
						echo '<script>alert ("Failed !")</script>';
					}
					
					foreach($entry->Template as $values){
						$valPin = $values->pin;
						$valIdx = $values->idx;
						$valAlg_ver = $values->alg_ver;
						$valTemp = $values->template;
						$sqlinserttemp	= 'insert into tb_template (pin,finger_idx,alg_ver,template) values ("'.$valPin.'","'.$valIdx.'","'.$valAlg_ver.'","'.$valTemp.'")';
						$queryinserttemp	= mysqli_query($GLOBALS["___mysqli_ston"], $sqlinserttemp);
						
						if($queryinserttemp){
						}else{
							echo '<script>alert ("Failed !")</script>';
						}
					}
				}
			}
			
			if($content->IsSession != $session){
		
				$namafile = "JSOnDataUser.txt"; 
				$handle = fopen ("content/".$namafile, "w"); 
				if (!$handle) { 				
					$server_output = "Filed Save"; 
				} else { 				
					fwrite ($handle, CreateUserJSON()); 					
					$dirname = dirname("")."/JSOnDataUser.txt";
				} 
				fclose($handle); 
			}	
			
			$session=$content->IsSession;				
		}
		
		
	}

?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 00:36:40 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description"
		content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
	<meta name="keywords"
		content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="PIXINVENT">
	<title>Data Verifikasi - Pemilihan Kepala Desa</title>
	<?php include "../../include/admin/css.php" ?>

	<!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
	data-menu="vertical-menu-modern" data-col="2-columns">
	<?php include "../../include/admin/header.php" ?>
	<?php include "../../include/admin/sidebar.php" ?>

	<!----- --->
	<div class="app-content content">
		<div class="content-wrapper">
			<div class="content-header row">
			</div>
			<div class="content-body">
				<!-- Stats -->
				<div class="row">
					<div class="col-xl-12 col-lg-6 col-12">
						<div class="card">
							<div class="card-content">
								<section id="print">
									<div class="row">
										<div class="col-12">
											<div class="card">
												<div class="card-header">
													<h2 class="">DATA VERIFIKASI</h2>
													<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
													<div class="heading-elements">
														<ul class="list-inline mb-0">
															<li><a data-action="expand"><i class="ft-maximize"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="card-content collapse show">
													<div class="card-body card-dashboard" style="margin-top:-35px;">
														<div class="table-responsive">
															<p class="card-text">Berikut adalah daftar pemilih yang telah melengkapi data verifikasi
															</p>
															<table
																class="table table-striped table-bordered dataex-visibility-print">
																<thead>
																	<tr>
																		<th>No</th>
																		<th>PIN</th>
																		<th>Nama</th>
																		<th>Password</th>
																		<th>RFID</th>
																		<th>Privilege</th>
																		<th></th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																	<?php
																$no = 1;
															$qy = mysqli_query($connect, "SELECT * FROM tb_user");
															while($q = mysqli_fetch_array($qy)) { ?>
																	<tr>
																		<td><?= $no; ?></td>
																		<td><?= $q['pin']; ?></td>
																		<td><?= $q['nama']; ?></td>
																		<td><?= $q['pwd']; ?></td>
																		<td><?= $q['rfid']; ?></td>
																		<td><?= $q['privilege']; ?></td>
																		<td>
																			<?php 
																				$pin =	$q['pin'];
																				$cek_edit = mysqli_query($connect,"SELECt *FROM tb_pemilih WHERE pin='$pin'");
																				if($rd = mysqli_num_rows($cek_edit)>0){ ?>
																				<button type="submit"
																					class="btn btn-secondary"
																					data-toggle="tooltip" title="Data Telah Lengkap" disabled>
																					<i class="fa fa-external-link"></i>
																				</button>
																				<?php } else { ?>
																				<form class="" action="lengkapi-profil.php?pin=<?= $q['pin']; ?>&&nama=<?= $q['nama']; ?>"
																				method="post">
																				
																				<button type="submit"
																					class="btn btn-primary"
																					data-toggle="tooltip" title="Lengkapi Data Pemilih">
																					<i class="fa fa-external-link"></i>
																				</button>
																			</form>
																			<?php	}
																			?>
																			
																		</td>
																		<td>
																			<button type="button"
																				onClick="hapus(<?php echo $q['id_pemilih']; ?>)"
																				class="btn btn-danger"
																				data-toggle="tooltip" title="Hapus">
																				<i class="ft-x"></i>
																				<script language="javascript">
																					function hapus(id_pemilih) {
																						if (confirm("Apakah Anda yakin ingin menghapus pemilih ini?")) {
																							window.location.href = 'hapus-pemilih.php?id_pemilih=' + id_pemilih + '';
																							return true;
																						}
																					}
																				</script>
																			</button>

																		</td>
																	</tr>
																	<?php $no++; } ?>
																</tbody>
																<tfoot>
																	<tr>
																		<th>No</th>
																		<th>PIN</th>
																		<th>Nama</th>
																		<th>Password</th>
																		<th>RFID</th>
																		<th>Privilege</th>
																		<th></th>
																		<th></th>
																	</tr>
																</tfoot>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php include "../../include/admin/javascript.php" ?>
		<script src="../../include/admin/ajax.js"></script>
</body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 00:38:38 GMT -->

</html>


