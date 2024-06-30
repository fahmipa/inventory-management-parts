<?php
session_start();
include ('config.php');
date_default_timezone_set('Asia/Jakarta');
$datetime = date('Y-m-d H:i:s');
$username =$_POST['username'];
$password =$_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
	header('Location:../app');
	$user = mysqli_fetch_array($query);
	$_SESSION['nama'] = $user['nama'];
	$_SESSION['level'] = $user['level'];
	$_SESSION['plant'] = $user['plant'];
	$nama = $user['nama'];
	$level = $user['level'];
	$plant = $user['plant'];
	$query = mysqli_query($koneksi,"INSERT INTO tb_rec_login (id, datetime, nama, username, password, level, plant, action) VALUES ('', '$datetime', '$nama', '$username', '$password', '$level', '$plant', 'Login');");

}
else if($username == '' || $password == ''){
	header('Location:../index.php?error=2');
}
else{
	header('Location:../index.php?error=1');
}
?>