<?php
$link = mysqli_connect('localhost','root','','tutorq');
if(!$link){
	die('Koneksi gagal');
}
$nama = $_POST['nama'];
$uname = $_POST['username'];
$pass  = $_POST['password'];
$email = $_POST['email'];
$jenjang = $_POST['jenjang'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO siswa (nama, username, password, email, jenjang, alamat) VALUES ('$nama', '$uname','$pass','$email','$jenjang','$alamat')";

if(mysqli_query($link,$query) ){
	echo "data berhasil ditambahkan";
}
else{
	echo "gagal ";
}
?>