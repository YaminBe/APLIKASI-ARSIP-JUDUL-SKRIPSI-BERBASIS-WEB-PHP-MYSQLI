		<?php 
		include 'koneksi.php';
		if (isset($_POST['daftar'])) {
	// Lanjutkan
	$nama  = $_POST['nama'];
	$nim   = $_POST['nim'];
	$tmp = $_POST['tmp'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$tahun = $_POST['tahun'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];

			$sumber = @$_FILES['foto']['tmp_name'];
			$target = '_assets/mhs/';
			$nama_gambar = @$_FILES['foto']['name'];

			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

			if ($pindah) {

			mysqli_query($con,"INSERT INTO tb_mhs (id_mhs,nim,nama_mhs,tmp_lahir,tgl_lahir,jk,alamat,email,th_masuk,username,password,aktif,foto) 
				VALUES ('','$nim','$nama','$tmp','$tgl','$jk','$alamat','$email','$tahun','$user','$pass','Y', '$nama_gambar')") or die (mysqli_error($con));

			echo "<script>
 	alert('Akun Berhasil Terdaftar !!');
 	window.location='login2.php';
 </script>";
}

}


		 ?>