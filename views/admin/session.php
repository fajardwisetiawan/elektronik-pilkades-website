<?php
if(@$_SESSION['username'] == NULL) {
  header('location:login-admin.php');
}
?>
