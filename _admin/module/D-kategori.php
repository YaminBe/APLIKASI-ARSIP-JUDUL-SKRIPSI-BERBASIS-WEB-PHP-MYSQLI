<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_kategori WHERE id_kategori='$id' ");
echo "<script>
 	alert('Data Telah Dihapus !!');
 	window.location='?page=v-kat';
 </script>";
 ?>


