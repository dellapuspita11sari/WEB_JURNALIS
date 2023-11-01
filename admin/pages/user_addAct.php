<?php
include '../koneksi.php';


$user_fullname = $_POST['user_fullname'];
$user_username = $_POST['user_username'];
$user_email = $_POST['user_email'];
$user_level = $_POST['user_level'];
$user_password =  ($_POST['user_password']);




mysqli_query($koneksi, "INSERT INTO users VALUES ('', '$user_fullname', '$user_username', '$user_email', '$user_level','$user_password')")or die(mysqli_error($koneksi));
header("location:user.php");
