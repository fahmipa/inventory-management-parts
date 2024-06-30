<?php
session_start();
//unset($_SESSION['nama']);
//unset($_SESSION['level']);
include ('../conf/config.php');
date_default_timezone_set('Asia/Jakarta');
//$query = mysqli_query($koneksi,"SELECT * FROM tb_rec_req");
//$var = mysqli_fetch_array($query);
$datetime = date('Y-m-d H:i:s');
$nama = $_SESSION['nama'];
//$username = $_SESSION['username']
//$password = $_SESSION['password'];
$level = $_SESSION['level'];
$plant = $_SESSION['plant'];
$query = mysqli_query($koneksi,"SELECT * FROM tb_users WHERE nama='$nama' AND level='$level'");
if(mysqli_num_rows($query)==1){
	$user = mysqli_fetch_array($query);
	$username = $user['username'];
	$password = $user['password'];
	$plant = $user['plant'];
	$query = mysqli_query($koneksi,"INSERT INTO tb_rec_login (id, datetime, nama, username, password, level, plant, action) VALUES ('', '$datetime', '$nama', '$username', '$password', '$level', '$plant', 'Logout');");

}
//$query = mysqli_query($koneksi,"INSERT INTO tb_rec_login (id, datetime, nama, username, password, level, plant, action) VALUES ('', '$datetime', '$nama', '$username', '$password', '$level', '$plant', 'Logout');");
session_destroy();
header('Location: ../');
?>