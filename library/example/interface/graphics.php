<?php
/* Print-outs using the newer graphics print command */

require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\EscposImage;
use Mike42\Escpos\PrintConnectors\FilePrintConnector;

include '../../../server/koneksi.php';
    $connector = new FilePrintConnector("POS-58");
    $no_urut = $_GET['no_urut'];
    $id_calon = $_GET['id_calon'];
    $nama = $_GET['nama'];
    $qr = $_GET['qr'];
    $pin = $_GET['pin'];
    $printer = new Printer($connector);

try {

    

    $tux = EscposImage::load("../../../image_qr/$qr");
    
    $printer -> graphics($tux);
    
    $printer -> cut();

    $sql =    mysqli_query($connect,"UPDATE tb_pemilih SET status=1 WHERE pin='$pin'");    
    
    $cek = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM tb_pilih WHERE id_calon = '$id_calon'"));
    $sql_s = mysqli_query($connect,"SELECT * FROM tb_pilih WHERE id_calon='$id_calon'");
    $sqlv = mysqli_fetch_object($sql_s);
    $jumlah_vote = $sqlv -> jumlah_vote;
    $total = $jumlah_vote +1;
	if ($cek > 0) {
        mysqli_query($connect,"UPDATE tb_pilih SET jumlah_vote=$total WHERE id_calon='$id_calon'");
	}else{
    mysqli_query($connect, "INSERT INTO tb_pilih (nama_calon, jumlah_vote, id_calon)
      VALUES ('$nama', '$total', '$id_calon')");
	}

    if($sql){
        $delete = mysqli_query($connect,"DELETE FROM get_pencoblos WHERE pin='$pin'");
        mysqli_query ($connect,"DELETE FROM tb_scanlog");
        mysqli_query ($connect,"UPDATE `tb_bilik` SET `status`=0");
        if ($delete){
            $ceked = mysqli_query($connect,"SELECT * FROM tb_cek WHERE pin='$pin'");
            $vceked = mysqli_num_rows($ceked);
            if($vceked>0){
            }else {
                mysqli_query ($connect,"INSERT INTO tb_cek (pin,status) VALUES ($pin,0)");
            }
            header("location:../../../views/bilik/");
        }
       
    }

} catch (Exception $e) {
    /* Images not supported on your PHP, or image file not found */
    $printer -> text($e -> getMessage() . "\n");
}

$printer -> close();
