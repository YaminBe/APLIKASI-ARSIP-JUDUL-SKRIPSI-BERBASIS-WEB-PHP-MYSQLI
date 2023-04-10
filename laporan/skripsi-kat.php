


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
<?php
include '../koneksi.php';
if(isset($_POST['id_kategori']) && $_POST['tahun']){
$sqlSiswa = mysqli_query($con, "SELECT * FROM tb_skripsi 
INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori
 WHERE tb_skripsi.id_kategori='$_POST[id_kategori]' AND tb_skripsi.tahun='$_POST[tahun]' ");
$ds=mysqli_fetch_array($sqlSiswa);
$id_kategori = $ds['id_kategori'];
$tahun = $ds['tahun'];
?>
			<table width="100%" style="text-align: center;">
				<tr>
				<td>
					<img src="../_assets/images/iain.png" width="60">
				</td>
				<td>
					<h4 align="center">LAPORAN DATA JUDUL SKRIPSI ANGKATAN <?php echo $ds['tahun']; ?><br>JURUSAN PENDIDIKAN TEKNIK INFORMATIKA DAN KOMPUTER <br> FAKULTAS TARBIYAH DAN ILMU KEGURUAN (FTIK) <br> INSTITUT AGAMA ISLAM NEGERI (IAIN) <br> BUKITTINGGI</h4>
			</td>
				<td>
					<img src="../_assets/images/ptik.png" width="70">
				</td>
				</tr>
			</table>
		<hr>
		<p>Kategori : <?php echo $ds['kategori']; ?> </p>
		<p>Tahun : <?php echo $ds['tahun']; ?> </p>

		<table width="100%" border="1" bordercolor="#333333" cellspacing="0" cellpadding="4" style="border-collapse:collapse;">
			<thead>
			<tr style="height: 40px;background-color: #99ff33;">
				<th>No.</th>
 				<th>Nim</th>
 				<th>Nama Mhs</th>
 				<th>Judul</th>
 				<th>Kategori</th>
 				<th>Tahun</th>
			</tr>
			</thead>
		<tbody>
	 			<?php 
	 			$no=1;
	 			$sql = mysqli_query($con,"SELECT * FROM tb_skripsi
	 				INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori
	 				INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs
	 			 WHERE tb_skripsi.id_kategori='$ds[id_kategori]' AND tb_skripsi.tahun='$ds[tahun]'");
	 			while ($data = mysqli_fetch_array($sql)) { ?>
	 			<tr>
	 				<td><?php echo $no++ ?>.</td>
	 				<td><?php echo $data['nim'] ?></td>
	 				<td><?php echo $data['nama_mhs'] ?></td>
	 				<td><?php echo $data['judul'] ?></td>
	 				<td><?php echo $data['kategori'] ?></td>
	 				<td><?php echo $data['tahun'] ?></td>
	 			</tr>
	 			<?php 
	 			}

	 			 ?>
	 		</tbody>
			
</table>

    <table width="100%">
            <!--    <a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
              <tr>
                <td align="right" colspan="6" rowspan="" headers="">
                    <p>Bukittinggi, <?php echo date (" d F Y") ?>  <br> <br>
                    Ketua Jurusan </p> <br> <br> <br>
                    <p>Riri Okra, M.Kom<br>
                    ---------------------------------- </p>
                </td>
              </tr>
            </table>

<?php
}
?>

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
