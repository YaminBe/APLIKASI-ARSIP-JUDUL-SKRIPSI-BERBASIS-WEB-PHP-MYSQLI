<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
body{
  font-family: Arial, Helvetica, sans-serif;
}
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style3 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: large; }
-->
</style>
</head>

<body>
  <table width="100%" style="text-align: center;">
        <tr>
        <td>
          <img src="../_assets/images/iain.png" width="60">
        </td>
        <td>
          <h4 align="center">LAPORAN DATA JUDUL SKRIPSI <br>JURUSAN PENDIDIKAN TEKNIK INFORMATIKA DAN KOMPUTER <br> FAKULTAS TARBIYAH DAN ILMU KEGURUAN (FTIK) <br> INSTITUT AGAMA ISLAM NEGERI (IAIN) <br> BUKITTINGGI</h4>
      </td>
        <td>
          <img src="../_assets/images/ptik.png" width="70">
        </td>
        </tr>
      </table>
<hr>
<table width="100%" border="1" style="border-collapse: collapse;" cellpadding="4">
  <tr style="background-color: orangered;height:50px;">
    <td class="style1"><strong>No.</strong></td>
    <td class="style1"><strong>NIM</strong></td>
    <td class="style1"><strong>NAMA</strong></td>
    <td class="style1"><strong>TAHUN</strong></td>
    <td class="style1"><strong>KATEGORI</strong></td>
    <td class="style1"><strong>JUDUL SKRIPSI </strong></td>
  </tr>


<?php 
include '../koneksi.php';
$no=1;
// $sql = mysqli_query($con,"SELECT * FROM tb_dosen");


$query= "SELECT * FROM tb_skripsi
INNER JOIN tb_mhs ON tb_skripsi.id_mhs = tb_mhs.id_mhs
INNER JOIN tb_kategori ON tb_skripsi.id_kategori = tb_kategori.id_kategori ";
$sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
  <tr>
    <td class="style1"><?php echo $no++; ?>.</td>
    <td class="style1"><?php echo $data['nim'] ?></td>
    <td class="style1"><?php echo $data['nama_mhs'] ?></td>
    <td class="style1"><?php echo $data['tahun'] ?></td>
    <td class="style1"><?php echo $data['kategori'] ?></td>
    <td class="style1"><?php echo $data['judul'] ?></td>
  </tr>
  <?php
  }
  ?>
</table>
<p align="center" class="style1">&nbsp;</p>
<table width="100%">
  <tr>
    <td width="74%">&nbsp;</td>
    <td width="26%"><p>Kubang Putih, xxxxxx</p>
    <p><strong>Kepala Jurusan</strong></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><strong>Riri Okra, S.Kom, M.Kom</strong></p>
    <p>NIP.080707897968685755757</p></td>
  </tr>
</table>
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 