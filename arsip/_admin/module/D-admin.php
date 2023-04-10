<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM admin WHERE idadmin='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-admin';
 </script>";
 ?>


