$(document).ready(function(){
	var id_pemilih;
 
	DisplayData();
 
	// $('#update').hide();
 
	$('#save').on('click', function(){
		if($('#nik').val() == "" || $('#nama').val() == "" || $('#tempat_tgl_lahir').val() == ""){
			alert($('#jenis_kelamin').val());
		}else{
			var nik = $('#nik').val();
			var nama = $('#nama').val();
            var tempat_tgl_lahir = $('#tempat_tgl_lahir').val();
            var jenis_kelamin = $('#jenis_kelamin').val();
			var agama = $('#agama').val();
            var status_kawin = $('#status_kawin').val();
            var pekerjaan = $('#pekerjaan').val();
            var alamat1 = $('#alamat1').val();
            var rt = $('#rt').val();
            var desa = $('#desa').val();
            var kecamatan = $('#kecamatan').val();
            var kabupaten = $('#kabupaten').val();
            var provinsi = $('#provinsi').val();
			var alamat = alamat1+" "+rt+" "+desa+" kec. "+kecamatan+" kab. "+kabupaten+" "+provinsi;
 
			$.ajax({
				url: 'http://localhost/aziz/model/insert_pemilih.php',
				type: 'POST',
				data: {
					nik: nik,
					nama: nama,
                    tempat_tgl_lahir: tempat_tgl_lahir,
                    jenis_kelamin: jenis_kelamin,
					agama: agama,
                    status_kawin: status_kawin,
                    pekerjaan: pekerjaan,
					alamat: alamat
				},
				success: function(data){
                        
                        $('#nik').val('');
                        $('#nama').val('');
                        $('#tempat_tgl_lahir').val('');
                        $('#jenis_kelamin').val('');
                        $('#agama').val('');
                        $('#status_kawin').val('');
                        $('#pekerjaan').val('');
                        $('#alamat1').val('');
                        $('#rt').val('');
                        $('#desa').val('');
                        $('#kecamatan').val('');
                        $('#kabupaten').val('');
                        $('#provinsi').val('');
					 DisplayData();
				}
			});
		}
 
	});
 
	function DisplayData(){
		$.ajax({
			url: 'http://localhost/aziz/model/tampil_pemilih.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
 
	$(document).on('click', '.delete', function(){
		var id_pemilih = $(this).attr('name');
 
		$.ajax({
			url: 'http://localhost/aziz/model/hapus_pemilih.php',
			type: 'POST',
			data: {
				id_pemilih: id_pemilih
			},
			success: function(data){
				DisplayData();
				alert('Data Berhasil Dihapus')
			}
		});
	})
 
	// $(document).on('click', '.edit', function(){
	// 	var id = $(this).attr('name');
 
	// 	$.ajax({
	// 		url: 'edit.php',
	// 		type: 'POST',
	// 		data: {
	// 			id: id
	// 		},
	// 		success: function(response){
	// 			var getArray = jQuery.parseJSON(response);
 
	// 			mem_id = getArray.mem_id;
 
	// 			$('#firstname').val(getArray.firstname);
	// 			$('#lastname').val(getArray.lastname);
	// 			$('#address').val(getArray.address);
 
	// 			$('#update').show();
	// 			$('#save').hide();	
	// 		}
	// 	})
	// });
 
	// $('#update').on('click', function(){
	// 	var firstname = $('#firstname').val();
	// 	var lastname = $('#lastname').val();
	// 	var address = $('#address').val();
 
 
	// 	$.ajax({
	// 		url: 'update_query.php',
	// 		type: 'POST',
	// 		data: {
	// 			id: mem_id,
	// 			firstname: firstname,
	// 			lastname: lastname,
	// 			address: address
	// 		},
	// 		success: function(){
	// 			DisplayData();
	// 			$('#firstname').val('');
	// 			$('#lastname').val('');
	// 			$('#address').val('');
 
	// 			alert("Successfully Updated!");
 
	// 			$('#update').hide();
	// 			$('#save').show();	
 
	// 			mem_id = "";
	// 		}
	// 	});
	// });
});