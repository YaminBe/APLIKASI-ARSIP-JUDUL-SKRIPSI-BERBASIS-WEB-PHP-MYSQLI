

<!-- <h1>Selamat Datang !</h1> <br> -->

<!-- <?php 
include 'koneksi.php';
$sql = mysqli_query($con,"SELECT * FROM tb_skripsi");
while ($data= mysqli_fetch_array($sql) ) {
?>

<tr>
	<td><?php echo $data['judul']; ?></td>
	<td><?php echo $data['judul']; ?></td>
</tr>

<tr>
	<td>
		<?php similar_text($judul, $judul, $persen); ?>
	</td>
	<td><?php echo $persen; ?></td>
</tr>




<?php
}
?> -->


<!-- <?php
$kalimat1 = "Sed vitae sapien sodales ligula tincidunt facilisis nec gravida nunc";
$kalimat2 = "Sed vitae sapien sodales ligula tincidunt facilisis nec gravida nunc";
similar_text($kalimat1, $kalimat2, $persen);
echo 'Kemiripan '.$persen.' %';
?> -->



<!-- <?php
# kesamaan kata
$word1 = "Perancangan Sistem Informasi Kearsipan Judul Skripsi PTIK PHP/MySQL";
$word2 = "Perancangan Sistem Informasi Kepegawaian Sekolah PHP/MySQL";
$match = similar_text($word1, $word2,$percent);
$percent = round($percent, 2);
echo "<br/>$match huruf sama antara '$word1' dan '$word2' <br> persentase kemiripan $percent %\n";

?> -->

<div class="jumbotron">
  <h1>Selamat Datang,..</h1>
  <p><b>Sistem Informasi Kearsipan Judul Skripsi Mahasiswa PTIK,</b> Merupakan Media Penyimpanan/ Informasi Mengenai Judul Skripsi & Jurnal Mahasiswa. Pada Sistem ini user dapat medownload / mencetak data judul skripsi ataupun jurnal. Sistem ini juga menyimpan data judul skripsi mahasiswa berdasarkan kategori judul & tahun </p>
<!--   <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p> -->
</div>


