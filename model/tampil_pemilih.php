<?php
	require '../server/koneksi.php';
	if(ISSET($_POST['res'])){
		$query = $conn->query("SELECT * FROM `tb_pemilih`");
		while($fetch = $query->fetch_array()){
			echo
				"
					<tr>
                    <td>".$fetch['nama']."</td>
                    <td>".$fetch['tempat_tgl_lahir']."</td>
						<td>".$fetch['alamat']."</td>
						<td><center><button class='btn btn-warning edit' name='".$fetch['id_pemilih']."'><span class='glyphicon glyphicon-edit'></span> Edit</button> | <button class='btn btn-danger delete' name='".$fetch['id_pemilih']."'><span class='glyphicon glyphicon-trash'></span> Delete</button></center></td>
					</tr>
				";
 
		}
	}
 
?> 