<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "db_arkatama";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if($conn->connect_error){
	die('Tidak bisa terhubung ke MySQL:' .$conn->connect_error);
}
?> 