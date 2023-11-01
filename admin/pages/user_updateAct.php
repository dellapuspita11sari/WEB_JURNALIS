<?php 
include '../koneksi.php';
$user_id  = $_POST['user_id'];
$user_fullname  = $_POST['user_fullname'];
$user_username = $_POST['user_username'];
$user_email = $_POST['user_email'];
$user_password = ($_POST['user_password']);


mysqli_query($koneksi, "UPDATE users SET  user_fullname='$user_fullname', user_username='$user_username', user_email='$user_email', user_password='$user_password', where user_id='$user_id'");
header("location:user.php");



