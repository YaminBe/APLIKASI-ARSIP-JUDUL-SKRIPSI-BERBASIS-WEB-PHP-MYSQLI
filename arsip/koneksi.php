<?php 
// Variabale Untuk koneksi
$con = mysqli_connect("localhost","root","","db_arsip1") or die(mysqli_error($con)) ;
if (!$con) {
	echo "Koneksi Ke Database Gagal !!";
}

 ?>