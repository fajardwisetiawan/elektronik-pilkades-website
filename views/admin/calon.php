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
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Data Calon - Pemilihan Kepala Desa</title>
    <?php include "../../include/admin/css.php" ?>
    <!-- END Custom CSS-->
  </head>
  <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <?php include "../../include/admin/header.php" ?>
  <?php include "../../include/admin/sidebar.php" ?>

    <!----- --->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Stats -->
<div class="row">
    <div class="col-xl-4 col-lg-6 col-12">
    <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="from-actions-top-left">Input Data Calon Kepala Desa</h4>
	                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						</ul>
					</div>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
						<div class="card-text">
							
							<p>Silahkan anda lengkapi form untuk menambahkan data calon</p>
						</div>
						<form class="" enctype="multipart/form-data" action="simpan-calon.php" method="post">
	                    	<div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i> Info Personal</h4>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">NIK</label>
										<input type="hidden" class="form-control" name="id_calon" required>
			                            <input type="text" maxlength="16" id="projectinput5" class="form-control" placeholder="Masukkan NIK" name="nik" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">Nomor Urut Calon</label>
			                            <input type="number" id="projectinput5" class="form-control" placeholder="Masukkan Nomor Urut Calon" name="no_urut" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">Nama</label>
			                            <input type="text" id="projectinput5" class="form-control" placeholder="Masukkan Nama" name="nama" required>
			                        </div>
			                    </div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput5">Tempat Lahir</label>
										<input type="text" id="tempat_lahir" class="form-control"
											placeholder="Masukkan Tempat Lahir" name="tempat_lahir"
											required>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput5">Tanggal Lahir</label>
										<input type="date" id="tgl_lahir" class="form-control"
											placeholder="Masukkan Tanggal Lahir" name="tgl_lahir"
											required>
									</div>
								</div>
								<div class="row">
			                        <div class="form-group col-md-6 mb-2">
									<label for="projectinput7">Jenis Kelamin</label>
			                            <select id="projectinput7" name="jk" class="form-control" required>
			                                <option value="" selected="" disabled="">Pilih Jenis Kelamin</option>
			                                <option value="Laki-laki">Laki-laki</option>
			                                <option value="Perempuan">Perempuan</option>
			                            </select>
			                        </div>

			                        <div class="form-group col-md-6 mb-2">
									<label for="projectinput7">Agama</label>
			                            <select id="projectinput7" name="agama" class="form-control" required>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
			                                <option value="Islam">Islam</option>
			                                <option value="Kristen">Kristen</option>
											<option value="Budha">Budha</option>
			                                <option value="Hindu">Hindu</option>
											<option value="Katholik">Katholik</option>
			                                <option value="Lainnya">Lainya</option>
			                            </select>
			                        </div>
			                    </div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput7">Status Perkawinan</label>
										<select id="projectinput7" name="status_kawin" class="form-control"
											required>
											<option value="" selected="" disabled="">Pilih Status Perkawinan</option>
											<option value="Menikah">Menikah</option>
											<option value="Belum Menikah">Belum Menikah</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput7">Pekerjaan</label>
										<select id="projectinput7" name="pekerjaan" class="form-control"
											required>
											<option value="" selected="" disabled="">Pilih Pekerjaan</option>
											<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
											<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
											<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
											<option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
											<option value="Kepolisian RI">Kepolisian RI</option>
											<option value="Petani/Pekebun">Petani/Pekebun</option>
											<option value="Peternak">Peternak</option>
											<option value="Nelayan/Perikanan">Nelayan/Perikanan</option>
											<option value="Karyawan Swasta">Karyawan Swasta</option>
											<option value="Karyawan BUMN">Karyawan BUMN</option>
											<option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
											<option value="Dosen">Dosen</option>
											<option value="Guru">Guru</option>
											<option value="Dokter">Dokter</option>
											<option value="Bidan">Bidan</option>
											<option value="Wiraswasta">Wiraswasta</option>
											<option value="Lainnya">Lainya</option>
										</select>
									</div>
								</div>
								
								<h4 class="form-section"><i class="ft-clipboard"></i> Alamat</h4>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput9">Alamat</label>
										<textarea id="projectinput9" rows="5" class="form-control" name="alamat" placeholder="Cantumkan Alamat" required></textarea>
									</div>
								</div>

								<div class="row">
									<!-- <div class="form-group col-md-6 mb-2">
										<label for="projectinput1">RT</label>
										<input type="text" id="projectinput1" class="form-control"
											placeholder="Masukkan RT" name="rt" required>
									</div> -->
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput7">RT</label>
										<select id="projectinput7" name="rt" class="form-control"
											required>
											<option value="" selected="" disabled="">Pilih RW</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
										</select>
									</div>
									<!-- <div class="form-group col-md-6 mb-2">
										<label for="projectinput2">RW</label>
										<input type="text" id="projectinput2" class="form-control"
											placeholder="Masukkan RW" name="rw" required>
									</div> -->
									<div class="form-group col-md-6 mb-2">
										<label for="projectinput7">RW</label>
										<select id="projectinput7" name="rw" class="form-control"
											required>
											<option value="" selected="" disabled="">Pilih RW</option>
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
										</select>
									</div>
								</div>
								<div class="row">
	                    			<div class="form-group col-md-6 mb-2">
			                            <label for="projectinput1">Desa</label>
			                            <input type="text" id="projectinput1" class="form-control" placeholder="Masukkan Desa" name="desa" required>
			                        </div>
			                        <div class="form-group col-md-6 mb-2">
			                            <label for="projectinput2">Kecamatan</label>
			                            <input type="text" id="projectinput2" class="form-control" placeholder="Masukkan Kecamatan" name="kecamatan" required>
			                        </div>
	                    		</div>
								<div class="row">
	                    			<div class="form-group col-md-6 mb-2">
			                            <label for="projectinput1">Kabupaten</label>
			                            <input type="text" id="projectinput1" class="form-control" placeholder="Masukkan Kabupaten" name="kabupaten" required>
			                        </div>
			                        <div class="form-group col-md-6 mb-2">
			                            <label for="projectinput2">Provinsi</label>
			                            <input type="text" id="projectinput2" class="form-control" placeholder="Masukkan Provinsi" name="provinsi" required>
			                        </div>
								</div>
								<br>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label>Foto Calon</label>
										<label id="projectinput8" class="file center-block">
											<input type="file" id="file" name="foto">
											<span class="file-custom"></span>
										</label>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput9">Visi</label>
										<textarea id="projectinput9" rows="5" class="form-control" name="visi" placeholder="Cantumkan Visi" required></textarea>
									</div>
								</div>
                                <div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput9">Misi</label>
										<textarea id="projectinput9" rows="5" class="form-control" name="misi" placeholder="Cantumkan Misi" required></textarea>
									</div>
								</div>
							</div>
                            <button type="submit" class="btn btn-primary">
	                            <i class="fa fa-check-square-o"></i> Tambah
	                        </button>
                        </form>
                        

	                </div>
                    
	            </div>
	        </div>
    </div>
    <div class="col-xl-8 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
            <section id="print">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Data Calon Kepala Desa</h4>
					<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body card-dashboard">
						<div class="table-responsive">
						<p class="card-text">Berikut adalah data calon kepala desa yang telah terdaftar
						</p>
                        <table class="table table-striped table-bordered dataex-visibility-print">
							<thead>
								<tr>
									<th>No</th>
									<th>NIK</th>
									<th>Nomor Urut</th>
									<th>Nama</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Agama</th>
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
									<th>Visi</th>
									<th>Misi</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								$qy = mysqli_query($connect, "SELECT * FROM tb_calon");
								while($q = mysqli_fetch_array($qy)) { ?>
								<tr>
									<td><?= $no; ?></td>
									<td><?= $q['nik']; ?></td>
									<td><?= $q['no_urut']; ?></td>
									<td><?= $q['nama']; ?></td>
									<td><?= $q['tempat_lahir']; ?></td>
									<td><?= $q['tgl_lahir']; ?></td>
									<td><?= $q['jk']; ?></td>
									<td><?= $q['agama']; ?></td>
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
									<td><?= $q['visi']; ?></td>
									<td><?= $q['misi']; ?></td>
									<td>
										<form class="" action="edit-calon.php" method="post">
											<input type="hidden" name="id_calon" value="<?= $q['id_calon'] ?>">
											<button type="submit" class="btn btn-primary" data-toggle="tooltip" title="Edit">
												<i class="fa fa-external-link"></i>
											</button>
										</form>
									</td>
									<td>
											<button type="button" onClick="hapus(<?php echo $q['id_calon']; ?>)" class="btn btn-danger" data-toggle="tooltip" title="Hapus">
												<i class="ft-x"></i>
												<script language="javascript">
													function hapus(id_calon)
													{
													if(confirm("Apakah Anda yakin ingin menghapus calon ini?")){
													window.location.href='hapus-calon.php?id_calon='+id_calon+'';
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
									<th>NIK</th>
									<th>Nomor Urut</th>
									<th>Nama</th>
									<th>Tempat Lahir</th>
									<th>Tanggal Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Agama</th>
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
									<th>Visi</th>
									<th>Misi</th>
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
  </body>

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Feb 2019 00:38:38 GMT -->
</html>