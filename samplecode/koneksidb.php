
<?php 
    ini_set("display_errors", 0); 
    error_reporting(0); 
  
    $db_host        = "localhost"; 
    $db_user        = "root"; 
    $db_pass        = ""; 
    $db_name        = "db_pemilu"; 
  
    $conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect($db_host,  $db_user,  $db_pass)); 
    if (!$conn) die("Connection for user $db_user refused!"); 
    mysqli_select_db( $conn, $db_name) or die("Can not connect to database!"); 
  
?> 