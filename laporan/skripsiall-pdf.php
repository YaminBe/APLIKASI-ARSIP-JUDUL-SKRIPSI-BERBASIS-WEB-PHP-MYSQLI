

 <?php
 //Define relative patd from tdis script to mPDF
 $nama_file='cetak-deskripsi'; //Beri nama file PDF hasil.
define('_MPDF_PAtd','mpdf60/');
//define("_JPGRAPH_PAtd", '../mpdf60/graph_cache/src/');

//define("_JPGRAPH_PAtd", '../jpgraph/src/'); 
 
include(_MPDF_PAtd . "mpdf.php");
//include(_MPDF_PAtd . "graph.php");

//include(_MPDF_PAtd . "graph_cache/src/");

$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 

$mpdf->useGraphs = true;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

body{
  font-family: Arial, Helvetica, sans-serif;
}

</style>
</head>
<body>
  <table width="100%" style="text-align: center;">
        <tr>
        <td>
          <img src="../_assets/images/iain.png" width="60">
        </td>
        <td>
          <h4 align="center">LAPORAN DATA JUDUL SKRIPSI<br>JURUSAN PENDIDIKAN TEKNIK INFORMATIKA DAN KOMPUTER <br> FAKULTAS TARBIYAH DAN ILMU KEGURUAN (FTIK) <br> INSTITUT AGAMA ISLAM NEGERI (IAIN) <br> BUKITTINGGI</h4>
      </td>
        <td>
          <img src="../_assets/images/ptik.png" width="70">
        </td>
        </tr>
      </table>
<hr>
<table width="100%" border="1" style="border-collapse: collapse;">
  <tr style="background-color: orangered;" height="50">
    <td>No.</td>
    <td>Nim</td>
    <td>Nama</td>
    <td>Tahun</td>
    <td>Kategori</td>
    <td>Judul</td>
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
    <td><?php echo $no++ ?></td>
    <td><?php echo $data['nim'] ?></td>
    <td><?php echo $data['nama_mhs'] ?></td>
    <td><?php echo $data['tahun'] ?></td>
    <td><?php echo $data['kategori'] ?></td>
    <td><?php echo $data['judul'] ?></td>
  </tr>
    <?php
  }
  ?>
</table>
   <table width="100%">
            <!--    <a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
              <tr>
                <td align="right" colspan="6" rowspan="" headers="">
                    <p>Kubang Putih, <?php echo date (" d F Y") ?>  <br> <br>
                    Kepala Jurusan </p> <br> <br>
                    <p>Riri Okra, M.Kom<br>
                    Nip.977979797979797</p>
                </td>
              </tr>
            </table>
</body>
</html>
<?php
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert tde encode for UTF-8, if you prefer tde ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);    // tde parameter 1 tells tdat tdis is css/style only and no body/html/text
$mpdf->WriteHTML($html,1);
$mpdf->Output($nama_file."-".date("Y/m/d H:i:s").".pdf" ,'I');
exit; 
?>