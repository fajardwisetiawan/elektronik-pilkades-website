<?php
    $pin = $_GET['pin'];

    require '../server/koneksi.php';
    $hapus = mysqli_query($connect,"DELETE FROM `get_pencoblos` WHERE pin='$pin'");

    if($hapus){
        header('location:http://localhost/aziz/views/bilik');
    }
?>