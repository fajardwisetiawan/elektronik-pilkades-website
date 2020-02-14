<?php
/* Change to the correct path if you copy this example! */
require __DIR__ . '/../../autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\WindowsPrintConnector;

/**
 * Install the printer using USB printing support, and the "Generic / Text Only" driver,
 * then share it (you can use a firewall so that it can only be seen locally).
 *
 * Use a WindowsPrintConnector with the share name to print.
 *
 * Troubleshooting: Fire up a command prompt, and ensure that (if your printer is shared as
 * "Receipt Printer), the following commands work:
 *
 *  echo "Hello World" > testfile
 *  copy testfile "\\%COMPUTERNAME%\Receipt Printer"
 *  del testfile
 */


   include '../../../server/koneksi.php';
//     // Enter the share name for your USB printer here
//     //$connector = null;
//     $connector = new WindowsPrintConnector("POS-58");
        $no_urut = 'Tidak Ada';
        $id_calon = '0';
        $nama = 'Tidak Memilih';
        $pin = $_GET['pin'];
        $rw = $_GET['rw'];
//     /* Print a "Hello world" receipt" */
//     $printer = new Printer($connector);
    
//     $printer->setJustification(Printer::JUSTIFY_CENTER);
//     $printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH|Printer::MODE_DOUBLE_HEIGHT|Printer::MODE_EMPHASIZED);
//     $printer->setEmphasis(true);
//          $printer->setTextSize(8,8);
//          $printer -> text("\n");
//          $printer -> text("\n");
//          $printer -> text("\n");
//          $printer -> text("\n");
//          $printer -> text("\n");
         
//     $printer -> text("Nomor Urut Calon \n");
//     $printer -> text($no_urut."\n");
//     $printer -> text("\n");
//     $printer -> text("\n");
//     $printer -> text("\n");
//     $printer -> text("\n");
//     $printer -> text("\n");
//     $printer -> text("\n");
//     $printer -> text("\n");
//     $printer -> cut();
    
//     /* Close printer */
//     $printer -> close();
//     $sql =    mysqli_query($connect,"UPDATE tb_pemilih SET status=1 WHERE pin='$pin'");    
    
//     $cek = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM tb_pilih WHERE id_calon = '$id_calon'"));
//     $sql_s = mysqli_query($connect,"SELECT * FROM tb_pilih WHERE id_calon='$id_calon'");
//     $sqlv = mysqli_fetch_object($sql_s);
//     $jumlah_vote = $sqlv -> jumlah_vote;
//     $total = $jumlah_vote +1;
// 	if ($cek > 0) {
//         mysqli_query($connect,"UPDATE tb_pilih SET jumlah_vote=$total WHERE id_calon='$id_calon'");
// 	}else{
//     mysqli_query($connect, "INSERT INTO tb_pilih (nama_calon, jumlah_vote, id_calon)
//       VALUES ('$nama', '$total', '$id_calon')");
// 	}

//     if($sql){
//         $delete = mysqli_query($connect,"DELETE FROM get_pencoblos WHERE pin='$pin'");
//         mysqli_query ($connect,"DELETE FROM tb_scanlog");
//         mysqli_query ($connect,"UPDATE `tb_bilik` SET `status`=0");
//         if ($delete){
//             $ceked = mysqli_query($connect,"SELECT * FROM tb_cek WHERE pin='$pin'");
//             $vceked = mysqli_num_rows($ceked);
//             if($vceked>0){
//             }else {
//                 mysqli_query ($connect,"INSERT INTO tb_cek (pin,status) VALUES ($pin,0)");
//             }
//             header("location:../../../views/bilik/");
//         }
       
//     }
   
    
// } catch (Exception $e) {
//     echo "Couldn't print to this printer: " . $e -> getMessage() . "\n";
// }

$connector = new WindowsPrintConnector("POS-58");
$printer = new Printer($connector);
// Most simple example
$printer->selectPrintMode(Printer::MODE_DOUBLE_WIDTH|Printer::MODE_DOUBLE_HEIGHT|Printer::MODE_EMPHASIZED);
$printer->setEmphasis(true);
$printer -> setJustification(Printer::JUSTIFY_CENTER);
$printer -> setTextSize(1, 1);
$printer -> text("\n\n\n Pemilihan Kepala Desa \n Linggasari \n\n");

// $jsn = '{"nama": '.$nama.', "nomor": '.$no_urut.'}';
// $testStr = $jsn;


$arr = array('nama' => $nama, 'nomor' => $no_urut);
$testStr = json_encode($arr);

$printer -> qrCode($testStr, Printer::QR_ECLEVEL_L, 8, Printer::QR_MODEL_2);
$printer -> setTextSize(1, 1);
$printer -> text("Terima kasih atas suara Anda\n\n\n\n\n\n");
$printer -> feed();
// Cut & close
$printer -> cut();
$printer -> close();
function title(Printer $printer, $str)
{
    $printer -> selectPrintMode(Printer::MODE_DOUBLE_HEIGHT | Printer::MODE_DOUBLE_WIDTH);
    $printer -> text($str);
    $printer -> selectPrintMode();
}

$sql =    mysqli_query($connect,"UPDATE tb_pemilih SET status=1 WHERE pin='$pin'");    
    
    $cek = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM tb_pilih WHERE id_calon = '$id_calon'"));
    $sql_s = mysqli_query($connect,"SELECT * FROM tb_pilih WHERE id_calon='$id_calon'");
    $sqlv = mysqli_fetch_object($sql_s);
    $jumlah_vote = $sqlv -> jumlah_vote;
    $total = $jumlah_vote +1;
	// if ($cek > 0) {
    //     mysqli_query($connect,"UPDATE tb_pilih SET jumlah_vote=$total WHERE id_calon='$id_calon'");
	// }else{
        mysqli_query($connect, "INSERT INTO tb_pilih (nama_calon, jumlah_vote, id_calon, rw)
        VALUES ('$nama', '1', '$id_calon', '$rw')");
      // }

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