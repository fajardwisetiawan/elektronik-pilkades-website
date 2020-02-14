<?php
include('../../server/koneksi.php');
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
	<title>Data Pemilih Sudah Memilih - Pemilihan Kepala Desa</title>
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
													<h4 class="card-title">Data Pemilih (Sudah Memilih)</h4>
													<a class="heading-elements-toggle"><i
															class="fa fa-ellipsis-v font-medium-3"></i></a>
													<div class="heading-elements">
														<ul class="list-inline mb-0">
															<li><a data-action="expand"><i class="ft-maximize"></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class="card-content collapse show">
													<div class="card-body card-dashboard">
														<div class="table-responsive">
															<p class="card-text">Berikut adalah data pemilih yang
																sudah melakukan pemilihan
															</p>
															<table
																class="table table-striped table-bordered dataex-visibility-print">
																<thead>
																	<tr>
																		<th>No</th>
																		<th>Keterangan</th>
																		<th>NIK</th>
																		<th>Nama</th>
																		<th>Tempat Lahir</th>
																		<th>Tanggal Lahir</th>
																		<th>Jenis Kelamin</th>
																		<th>Agama</th>
																		<th>Nomor Telepon</th>
																		<th>Status Kawin</th>
																		<th>Pekerjaan</th>
																		<th>Alamat</th>
																		<th>RT</th>
																		<th>RW</th>
																		<th>Desa</th>
																		<th>Kecamatan</th>
																		<th>Kabupaten</th>
																		<th>Provinsi</th>
																		<th>Foto</th>
																		<th></th>
																		<th></th>
																	</tr>
																</thead>
																<tbody>
																	<?php
								$no = 1;
								$qy = mysqli_query($connect, "SELECT * FROM tb_pemilih WHERE status=1");
								while($q = mysqli_fetch_array($qy)) { ?>
																	<tr>
																		<td><?= $no; ?></td>
																		<td><?= $q['keterangan']; ?></td>
																		<td><?= $q['nik']; ?></td>
																		<td><?= $q['nama']; ?></td>
																		<td><?= $q['tempat_lahir']; ?></td>
																		<td><?= $q['tgl_lahir']; ?></td>
																		<td><?= $q['jk']; ?></td>
																		<td><?= $q['agama']; ?></td>
																		<td><?= $q['no_telp']; ?></td>
																		<td><?= $q['status_kawin']; ?></td>
																		<td><?= $q['pekerjaan']; ?></td>
																		<td><?= $q['alamat']; ?></td>
																		<td><?= $q['rt']; ?></td>
																		<td><?= $q['rw']; ?></td>
																		<td><?= $q['desa']; ?></td>
																		<td><?= $q['kecamatan']; ?></td>
																		<td><?= $q['kabupaten']; ?></td>
																		<td><?= $q['provinsi']; ?></td>
																		<?php if($q['foto'] == ''){ ?>
																		<td class="py-1">
																			<img src="../../logo/avatar0.jpg" class="img-circle" width="100px" alt="image" />
																		</td>
																		<?php }else{ ?>
																		<td>
																			<div class="hd-message-img">
																				<img src="../../image/<?= $q['foto']; ?>" class="img-circle" width="100px" alt="image" />
																			</div>
																		</td>
																		<?php } ?>
																		<td>
																			<form class="" action="edit-pemilih-sudah.php"
																				method="post">
																				<input type="hidden" name="id_pemilih"
																					value="<?= $q['id_pemilih'] ?>">
																				<button type="submit"
																					class="btn btn-primary"
																					data-toggle="tooltip" title="Edit">
																					<i class="fa fa-external-link"></i>
																				</button>
																			</form>
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
																		<th>Keterangan</th>
																		<th>NIK</th>
																		<th>Nama</th>
																		<th>Tempat Lahir</th>
																		<th>Tanggal Lahir</th>
																		<th>Jenis Kelamin</th>
																		<th>Agama</th>
																		<th>Nomor Telepon</th>
																		<th>Status Kawin</th>
																		<th>Pekerjaan</th>
																		<th>Alamat</th>
																		<th>RT</th>
																		<th>RW</th>
																		<th>Desa</th>
																		<th>Kecamatan</th>
																		<th>Kabupaten</th>
																		<th>Provinsi</th>
																		<th>Foto</th>
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