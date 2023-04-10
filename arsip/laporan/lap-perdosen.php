
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
?>
<?php 
$id= $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM tb_dosen
INNER JOIN tb_fakultas ON tb_dosen.id_fakultas=tb_fakultas.id_fakultas
INNER JOIN tb_jurusan ON tb_dosen.id_jurusan=tb_jurusan.id_jurusan
WHERE tb_dosen.id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
<table width="100%" style="text-align: center;">
  <tr>
  <td>
  <img src="../_assets/images/iain.png" width="60">
  </td>
    <td>
    <h4 align="center">DETAIL LAPORAN DATA DOSEN PEMBIMBING DAN PENGUJI<br>JURUSAN PENDIDIKAN TEKNIK INFORMATIKA DAN KOMPUTER <br> FAKULTAS TARBIYAH DAN ILMU KEGURUAN (FTIK) <br> INSTITUT AGAMA ISLAM NEGERI (IAIN) <br> BUKITTINGGI</h4>
    </td>
    <td>
      <img src="../_assets/images/ptik.png" width="70">
    </td>
  </tr>
</table>
<hr>
               
                <h5> <code>Data Dosen</code></h5>

<table width="100%">
  <tr>
    <td width="20%">Nip/NIDN</td>
    <td width="1%">:</td>
    <td width="69%"><?php echo $data['nip'] ?></td>
    <td width="10%" rowspan="8"><img src="../_assets/mhs/<?php echo $data['foto'];?>" width="100" height="150" style="border-radius: 15px;border:2px solid #212121;"/></td>
  </tr>
  <tr>
    <td>Nama Dosen </td>
    <td>:</td>
    <td><?php echo $data['nama_dosen'] ?></td>
  </tr>
  <tr>
    <td>Gelar Akademik </td>
    <td>:</td>
    <td><?php echo $data['gelar'] ?></td>
  </tr>
  <tr>
    <td>Tempat Tanggal,Lahir </td>
    <td>:</td>
    <td><?php echo $data['t_lahir'] ?>, <?php echo $data['tg_lahir'] ?></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>:</td>
    <td><?php echo $data['jk'] ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $data['alamat'] ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>:</td>
    <td><?php echo $data['email'] ?></td>
  </tr>
  <tr>
    <td>Dosen</td>
    <td>:</td>
    <td><?php echo $data['nm_fakultas'] ?> | <?php echo $data['nm_jurusan'] ?></td>
  </tr>
</table>

                <h5><code>Mahasiswa Bimbingan</code></h5>
                <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="5" cellspacing="0">
                  <thead>
                    <tr style="background-color: #8bc34a;">
                      <th>No.</th>
                      <th>Nama Mahasiswa</th>
                      <th>Judul Skripsi Bimbingan</th>
                      <th>Tahun</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $id= $_GET['id'];
                      $sql = mysqli_query($con,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
                      $data = mysqli_fetch_array($sql);

                      ?>
                       <?php 
                        $no=1;
                        $query ="SELECT * FROM tb_mhs
                        INNER JOIN tb_skripsi ON tb_mhs.id_mhs=tb_skripsi.id_mhs
                        WHERE pemb1='$data[nama_dosen]'
                        ";
                        $sql = mysqli_query($con,$query);
                        while ($row= mysqli_fetch_array($sql) ) {
                        ?>
                    <tr>
                      <td><?php echo $no++; ?>.</td>
                      <td><?php echo $row['nama_mhs']; ?></td>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['tahun']; ?></td>
                    </tr>
                      <?php
                      }
                      ?>                      
                  </tbody>
                </table>
                <h5><code>Skripsi Yang Di Uji</code></h5>
                <table width="100%" border="1" style="border-collapse: collapse;" cellpadding="5" cellspacing="0">
                  <thead>
                    <tr style="background-color: #8bc34a;">
                      <th>No.</th>
                      <th>Nama Mahasiswa</th>
                      <th>Judul Skripsi Yang Diuji</th>
                      <th>Tahun</th>
                    </tr>
                  </thead>
                  <tbody>

<?php 
$id= $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
                       <?php 
                        $no=1;
                        $query ="SELECT * FROM tb_mhs
                        INNER JOIN tb_skripsi ON tb_mhs.id_mhs=tb_skripsi.id_mhs
                        WHERE penguji1='$data[nama_dosen]'
                        ";
                        $sql = mysqli_query($con,$query);
                        while ($row= mysqli_fetch_array($sql) ) {
                        ?>
                    <tr>
                      <td><?php echo $no++; ?>.</td>
                      <td><?php echo $row['nama_mhs']; ?></td>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['tahun']; ?></td>
                    </tr>
                      <?php
                      }
                      ?>                      
                  </tbody>
                </table>
                <br>
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