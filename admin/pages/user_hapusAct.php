<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from users where user_id='$id'");
$d = mysqli_fetch_assoc($data);
mysqli_query($koneksi, "delete from users where user_id='$id'");
header("location:user.php");
