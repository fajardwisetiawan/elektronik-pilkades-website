<?php
$dbhost = "localhost";
$dbname = "db_pemilu";
$dbuser = "root";
$dbpass = "";

try{
    $dbcon = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $dbcon -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeption $e){
    print "Error!: ".$e->getMessage()."</br>";
    die();
}

$stmt = $dbcon->prepare("SELECT nama_calon, SUM(jumlah_vote) as jumlah_vote FROM tb_pilih GROUP BY nama_calon");
$stmt->execute();

$row1=[];
while($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    extract($row);
    $row1[]=['nama_calon'=>$nama_calon, 'jumlah_vote'=>$jumlah_vote];

}

echo json_encode($row1);


?>