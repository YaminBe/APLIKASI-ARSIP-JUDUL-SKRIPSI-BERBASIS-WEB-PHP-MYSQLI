<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_jurusan WHERE id_jurusan='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-jur';
 </script>";
 ?>


