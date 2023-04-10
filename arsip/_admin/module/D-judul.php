<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_skripsi WHERE id_skripsi='$id' ");
echo "<script>
 	alert('Judul Skripsi Telah Dihapus !!');
 	window.location='?page=v-judul';
 </script>";
 ?>


