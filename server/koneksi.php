<?php
ini_set("display_errors", 0); 
error_reporting(0); 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_pemilu";

$connect = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname,  $username,  $password)); 
    if (!$connect) die("Connection for user $db_user refused!"); 
    mysqli_select_db( $connect, $database) or die("Can not connect to database!"); 
