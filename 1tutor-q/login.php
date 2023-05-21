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

if(mysqli_num_rows($result) === 1 )
{
    echo "Berhasil ";
    $data = mysqli_fetch_assoc( $result );
    
    echo 'Username anda '. $data['username'];  
}
else{
    echo "gagal";
}
// $query = "SELECT * FROM siswa";
// $hasil = mysqli_query($link,$query);

// if( mysqli_num_rows($hasil) > 0 ){
// 	while ($data = mysqli_fetch_assoc($hasil)) {
// 		echo $data['nama']." ".$data['email']."<br>";
// 	}
// }  

// echo "$username"." "."$password";
mysqli_close($link);
?>