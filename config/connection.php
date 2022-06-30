<?php 

$hostname = "localhost";
$userName = "root";
$password = "";
$database = "day12_project01";



// Buat coneksi database
$connection = new mysqli(

$hostname,
$userName,
$password,
$database);

//periksa koneksi

if($connection->connect_error){
	echo "koneksi gagal..";
} 

else{

	echo "koneksi berhasil....";
}


?>