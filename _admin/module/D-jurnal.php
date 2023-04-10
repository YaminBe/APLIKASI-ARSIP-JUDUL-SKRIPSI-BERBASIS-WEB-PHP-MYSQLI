<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_jurnal WHERE id_jurnal='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-jurnal';
 </script>";
 ?>


