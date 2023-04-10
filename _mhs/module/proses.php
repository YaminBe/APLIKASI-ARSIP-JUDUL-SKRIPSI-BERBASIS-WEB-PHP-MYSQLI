<!-- <?php
include "config.php"; //ini untuk masuk ke database
$cekdulu= "select * from table_anda where username='$_POST[un]'"; //username dan $_POST[un] diganti sesuai dengan yang kalian gunakan
$prosescek= mysql_query($cekdulu);

?> -->


<?php 
include '../koneksi.php';

if (isset($_POST['S-Skripsi'])) {
	// Lanjutkan
	$id_mhs = $_POST['id_mhs'];
		$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	$abstrak = $_POST['abstrak'];
	$key = $_POST['key'];
	$pemb1 = $_POST['pemb1'];
	$pemb2 = $_POST['pemb2'];
	$peng1 = $_POST['peng1'];
	$peng2 = $_POST['peng2'];

	$tgl1 = $_POST['tgl1'];
	$tgl2 = $_POST['tgl2'];
	$tahun = $_POST['tahun'];

	$cekdulu= "select * from tb_skripsi where id_mhs='$_POST[id_mhs]'";
	$prosescek= mysqli_query($con,$cekdulu);


	if (mysqli_num_rows($prosescek)>0) { //proses mengingatkan data sudah ada
    echo "<script>alert('Anda Telah melakukan input data skripsi Sebelumnya');history.go(-1) </script>";
}
else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan




	mysqli_query($con,"INSERT INTO tb_skripsi (id_skripsi,id_mhs,id_kategori,judul,abstrak,keyword,pemb1,pemb2,penguji1,penguji2,mulai_bimbingan,akhir_bimbingan,tahun) 

	VALUES ('','$id_mhs','$kategori','$judul','$abstrak', '$key','$pemb1','$pemb2','$peng1','$peng2','$tgl1','$tgl2','$tahun')") or die (mysqli_error($con));
	echo "<script>
	alert('Data Berhasil Ditambahkan !!');
	window.location='?page=upload';
	</script>";
 
}




}


 ?>

