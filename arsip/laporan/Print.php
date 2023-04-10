



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: x-large;
	font-weight: bold;
}
body{
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>

<body>
		<?php 
	include '../koneksi.php';
$id = $_GET['id'];
$query= "SELECT * FROM tb_skripsi
  INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs
  INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_skripsi.id_skripsi='$id' ";
$sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
$data= mysqli_fetch_array($sql_ds)
 ?>
<table width="100%">
  <tr>
    <td><div align="center" class="style1">ABSATRAK <hr></div></td>
 
  </tr>
  <tr>
    <td><?php echo $data['abstrak']; ?></td>
  </tr>
  <tr>
    <td><strong>Keyword </strong>: <?php echo $data['keyword']; ?> </td>
  </tr>
</table>
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 