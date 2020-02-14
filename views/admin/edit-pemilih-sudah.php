<?php include ("../../server/koneksi.php");
$qy = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM tb_pemilih WHERE id_pemilih = '$_POST[id_pemilih]'")); 
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
    <title>Edit Pemilih - Pemilihan Kepala Desa</title>
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
    <div class="col-12">
    <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="from-actions-top-left">Ubah Data Pemilih</h4>
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
						</div>
	                    <form class="" enctype="multipart/form-data" action="update-pemilih-sudah.php" method="post">
	                    	<div class="form-body">
                            <h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
	                    		<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">NIK</label>
										<input type="hidden" name="id_pemilih" value="<?= $qy['id_pemilih'] ?>" required>
			                            <input type="text" id="projectinput5" class="form-control" value="<?= $qy['nik'] ?>" placeholder="Masukkan NIK" name="nik" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">Nama</label>
			                            <input type="text" id="projectinput5" class="form-control" value="<?= $qy['nama'] ?>" placeholder="Masukkan Nama" name="nama" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">Tempat Lahir</label>
			                            <input type="text" id="projectinput5" class="form-control" value="<?= $qy['tempat_lahir'] ?>" placeholder="Masukkan Tempat, Tanggal Lahir" name="tempat_lahir" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">Tanggal Lahir</label>
			                            <input type="date" id="projectinput5" class="form-control" value="<?= $qy['tgl_lahir'] ?>" placeholder="Masukkan Tempat, Tanggal Lahir" name="tgl_lahir" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-md-6 mb-2">
										<label class="nk-label">Jenis Kelamin</label>
										<select class="form-control" name="jk" required>
										<?php if($qy['jk'] == 'Laki-laki'){ ?>
			                                <option value="" selected="" disabled="">Pilih Jenis Kelamin</option>
											<option value="Laki-laki" selected>Laki-laki</option>
											<option value="Perempuan">Perempuan</option>
										<?php }else{ ?>
			                                <option value="" selected="" disabled="">Pilih Jenis Kelamin</option>
											<option value="Laki-laki">Laki-laki</option>
											<option value="Perempuan" selected>Perempuan</option>
										<?php } ?>
										</select>
			                        </div>

			                        <div class="form-group col-md-6 mb-2">
									<label for="projectinput7">Agama</label>
			                            <select id="projectinput7" name="agama" class="form-control" required>
			                            <?php if($qy['agama'] == 'Islam'){ ?>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
											<option value="Islam" selected>Islam</option>
			                                <option value="Kristen">Kristen</option>
											<option value="Budha">Budha</option>
			                                <option value="Hindu">Hindu</option>
											<option value="Katholik">Katholik</option>
			                                <option value="Lainnya">Lainya</option>
										<?php }elseif($qy['agama'] == 'Kristen'){ ?>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
											<option value="Islam">Islam</option>
			                                <option value="Kristen" selected>Kristen</option>
											<option value="Budha">Budha</option>
			                                <option value="Hindu">Hindu</option>
											<option value="Katholik">Katholik</option>
			                                <option value="Lainnya">Lainya</option>
										<?php }elseif($qy['agama'] == 'Budha'){ ?>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
											<option value="Islam">Islam</option>
			                                <option value="Kristen">Kristen</option>
											<option value="Budha" selected>Budha</option>
			                                <option value="Hindu">Hindu</option>
											<option value="Katholik">Katholik</option>
			                                <option value="Lainnya">Lainya</option>
										<?php }elseif($qy['agama'] == 'Hindu'){ ?>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
											<option value="Islam">Islam</option>
			                                <option value="Kristen">Kristen</option>
											<option value="Budha">Budha</option>
			                                <option value="Hindu" selected>Hindu</option>
											<option value="Katholik">Katholik</option>
			                                <option value="Lainnya">Lainya</option>
										<?php }elseif($qy['agama'] == 'Katholik'){ ?>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
											<option value="Islam">Islam</option>
			                                <option value="Kristen">Kristen</option>
											<option value="Budha">Budha</option>
			                                <option value="Hindu">Hindu</option>
											<option value="Katholik" selected>Katholik</option>
			                                <option value="Lainnya">Lainya</option>
										<?php }else{ ?>
			                                <option value="" selected="" disabled="">Pilih Agama</option>
											<option value="Islam">Islam</option>
			                                <option value="Kristen">Kristen</option>
											<option value="Budha">Budha</option>
			                                <option value="Hindu">Hindu</option>
											<option value="Katholik">Katholik</option>
			                                <option value="Lainnya" selected>Lainnya</option>
										<?php } ?>
										</select>
			                        </div>
								</div>
								<div class="row">
			                        <div class="form-group col-12 mb-2">
										<label for="projectinput5">Nomor Telepon</label>
			                            <input type="text" id="projectinput5" class="form-control" value="<?= $qy['no_telp'] ?>" placeholder="Masukkan Nomor Telepon" name="no_telp" required>
			                        </div>
			                    </div>
								<div class="row">
			                        <div class="form-group col-md-12 mb-2">
										<label class="nk-label">Status Perkawinan</label>
										<select class="form-control" name="status_kawin" required>
										<?php if($qy['status_kawin'] == 'Menikah'){ ?>
			                                <option value="" selected="" disabled="">Pilih Status Perkawinan</option>
											<option value="Menikah" selected>Menikah</option>
											<option value="Belum Menikah">Belum Menikah</option>
										<?php }else{ ?>
			                                <option value="" selected="" disabled="">Pilih Status Perkawinan</option>
											<option value="Menikah" selected>Menikah</option>
											<option value="Belum Menikah">Belum Menikah</option>
										<?php } ?>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12 mb-2">
										<label for="projectinput7">Pekerjaan</label>
											<select id="projectinput7" name="pekerjaan" class="form-control" required>
											<?php if($qy['pekerjaan'] == 'Belum/Tidak Bekerja'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja" selected>Belum/Tidak Bekerja</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Pelajar/Mahasiswa'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa" selected>Pelajar/Mahasiswa</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Pegawai Negeri Sipil'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil" selected>Pegawai Negeri Sipil</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Tentara Nasional Indonesia'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
												<option value="Tentara Nasional Indonesia" selected>Tentara Nasional Indonesia</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Kepolisian RI'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
												<option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
												<option value="Kepolisian RI" selected>Kepolisian RI</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Petani/Pekebun'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
												<option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
												<option value="Kepolisian RI">Kepolisian RI</option>
												<option value="Petani/Pekebun" selected>Petani/Pekebun</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Peternak'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
												<option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
												<option value="Kepolisian RI">Kepolisian RI</option>
												<option value="Petani/Pekebun">Petani/Pekebun</option>
												<option value="Peternak" selected>Peternak</option>
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
											<?php }elseif($qy['pekerjaan'] == 'Nelayan/Perikanan'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
												<option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
												<option value="Kepolisian RI">Kepolisian RI</option>
												<option value="Petani/Pekebun">Petani/Pekebun</option>
												<option value="Peternak">Peternak</option>
												<option value="Nelayan/Perikanan" selected>Nelayan/Perikanan</option>
												<option value="Karyawan Swasta">Karyawan Swasta</option>
												<option value="Karyawan BUMN">Karyawan BUMN</option>
												<option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
												<option value="Dosen">Dosen</option>
												<option value="Guru">Guru</option>
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Karyawan Swasta'){ ?>
												<option value="" selected="" disabled="">Pilih Pekerjaan</option>
												<option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
												<option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
												<option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
												<option value="Tentara Nasional Indonesia">Tentara Nasional Indonesia</option>
												<option value="Kepolisian RI">Kepolisian RI</option>
												<option value="Petani/Pekebun">Petani/Pekebun</option>
												<option value="Peternak">Peternak</option>
												<option value="Nelayan/Perikanan">Nelayan/Perikanan</option>
												<option value="Karyawan Swasta" selected>Karyawan Swasta</option>
												<option value="Karyawan BUMN">Karyawan BUMN</option>
												<option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
												<option value="Dosen">Dosen</option>
												<option value="Guru">Guru</option>
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Karyawan BUMN'){ ?>
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
												<option value="Karyawan BUMN" selected>Karyawan BUMN</option>
												<option value="Pembantu Rumah Tangga">Pembantu Rumah Tangga</option>
												<option value="Dosen">Dosen</option>
												<option value="Guru">Guru</option>
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Pembantu Rumah Tangga'){ ?>
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
												<option value="Pembantu Rumah Tangga" selected>Pembantu Rumah Tangga</option>
												<option value="Dosen">Dosen</option>
												<option value="Guru">Guru</option>
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Dosen'){ ?>
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
												<option value="Dosen" selected>Dosen</option>
												<option value="Guru">Guru</option>
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Guru'){ ?>
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
												<option value="Guru" selected>Guru</option>
												<option value="Dokter">Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Dokter'){ ?>
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
												<option value="Dokter" selected>Dokter</option>
												<option value="Bidan">Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Bidan'){ ?>
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
												<option value="Bidan" selected>Bidan</option>
												<option value="Wiraswasta">Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }elseif($qy['pekerjaan'] == 'Wiraswasta'){ ?>
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
												<option value="Wiraswasta" selected>Wiraswasta</option>
												<option value="Lainnya">Lainya</option>
											<?php }else{ ?>
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
												<option value="Lainnya" selected>Lainya</option>
											<?php } ?>
											</select>
										</div>
									</div>
								</div>
								
								<h4 class="form-section"><i class="ft-clipboard"></i> Alamat</h4>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput9">Alamat</label>
										<textarea id="projectinput9" rows="5" class="form-control" name="alamat" placeholder="Cantumkan Alamat" required><?= $qy['alamat'] ?></textarea>
									</div>
								</div>
								<div class="row">
	                    			<div class="form-group col-md-6 mb-2">
			                            <label for="projectinput1">RT</label>
			                            <input type="text" id="projectinput1" class="form-control" value="<?= $qy['rt'] ?>" placeholder="Masukkan RT" name="rt" required>
			                        </div>
			                        <div class="form-group col-md-6 mb-2">
			                            <label for="projectinput2">RW</label>
			                            <input type="text" id="projectinput2" class="form-control" value="<?= $qy['rw'] ?>" placeholder="Masukkan RW" name="rw" required>
			                        </div>
	                    		</div>
								<div class="row">
	                    			<div class="form-group col-md-6 mb-2">
			                            <label for="projectinput1">Desa</label>
			                            <input type="text" id="projectinput1" class="form-control" value="<?= $qy['desa'] ?>" placeholder="Masukkan Desa" name="desa" required>
			                        </div>
			                        <div class="form-group col-md-6 mb-2">
			                            <label for="projectinput2">Kecamatan</label>
			                            <input type="text" id="projectinput2" class="form-control" value="<?= $qy['kecamatan'] ?>" placeholder="Masukkan Kecamatan" name="kecamatan" required>
			                        </div>
	                    		</div>
								<div class="row">
	                    			<div class="form-group col-md-6 mb-2">
			                            <label for="projectinput1">Kabupaten</label>
			                            <input type="text" id="projectinput1" class="form-control" value="<?= $qy['kabupaten'] ?>" placeholder="Masukkan Kabupaten" name="kabupaten" required>
			                        </div>
			                        <div class="form-group col-md-6 mb-2">
			                            <label for="projectinput2">Provinsi</label>
			                            <input type="text" id="projectinput2" class="form-control" value="<?= $qy['provinsi'] ?>" placeholder="Masukkan Provinsi" name="provinsi" required>
			                        </div>
	                    		</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label>Foto Pemilih</label><br>
										<?php if($qy['foto'] == ''){ ?>
											<img src="../../logo/avatar0.jpg" class="img-circle" width="100px" alt="image" />
										<?php }else{ ?>
										<div class="hd-message-img">
											<img src="../../image/<?= $qy['foto']; ?>" class="img-circle" width="100px" alt="image" />
										</div>
										<?php } ?>
										<br>
											<label class="fancy-checkbox">
											<input type="checkbox"  id="toggle1" name="ubah_foto">
											<span>Ubah Foto</span>
											</label>
										</div>
										<div class="form-group col-12 mb-2" style="margin-top: -20px;">
												<input type="file" accept="image/*" name="foto" class="form-control" id="foto1" required disabled>
												<small>*Centang jika ingin mengubah foto</small>
										</div>
								</div>
								<button type="submit" class="btn btn-primary">
	                                <i class="fa ft-edit"></i> Ubah
	                            </button>
							</div>
                        </form>
                        

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