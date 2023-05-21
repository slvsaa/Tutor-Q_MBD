<?php
$link = mysqli_connect("localhost","root","","tutorq");



if (!$link) {
  	die('ada error');
}
$uname = $_POST['username'];
$pass  = $_POST['password'];

$query = " SELECT * FROM siswa WHERE username = '$uname' AND password = '$pass' ";

trim($query);

$result = mysqli_query($link,$query);

if(mysqli_num_rows($result))
{
	$nama = mysqli_fetch_assoc($result);
    session_start();
	$_SESSION['nama'] = $nama['nama'];
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
    header("location:login.html");
}	

mysqli_close($link);
?>