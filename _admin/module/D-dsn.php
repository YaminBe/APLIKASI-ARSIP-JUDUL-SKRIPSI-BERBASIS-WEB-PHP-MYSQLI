<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_dosen WHERE id_dosen='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-dsn';
 </script>";
 ?>


