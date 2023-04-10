<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_fakultas WHERE id_fakultas='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-fak';
 </script>";
 ?>


