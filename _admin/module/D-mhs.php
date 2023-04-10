<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_mhs WHERE id_mhs='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-mhs';
 </script>";
 ?>


