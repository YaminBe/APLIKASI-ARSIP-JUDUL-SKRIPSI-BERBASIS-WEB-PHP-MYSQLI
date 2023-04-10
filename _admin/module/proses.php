<?php 
include '../koneksi.php';

if (isset($_POST['S-User'])) {
	// Lanjutkan
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$status = $_POST['status'];

			$sumber = @$_FILES['foto']['tmp_name'];
			$target = '../_assets/user/';
			$nama_gambar = @$_FILES['foto']['name'];

			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

			if ($pindah) {

			mysqli_query($con,"INSERT INTO admin (idadmin,username,password,namalengkap,aktif,foto) 
				VALUES ('','$user','$pass','$nama','$status', '$nama_gambar')") or die (mysqli_error($con));
			echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=v-admin';
 </script>";



}

}elseif (isset($_POST['E-User'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$status = $_POST['status'];
	mysqli_query($con,"
		UPDATE admin SET username='$user',password='$pass',namalengkap='$nama',aktif='$status' WHERE idadmin='$id'


	 ") or die (mysqli_error($con));
			echo "<script>
 	alert('Data Berhasil Diubah !!');
 	window.location='?page=v-admin';
 </script>";

// Simapan MHS
}elseif (isset($_POST['S-mhs'])) {
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
			$target = '../_assets/mhs/';
			$nama_gambar = @$_FILES['foto']['name'];

			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

			if ($pindah) {

			mysqli_query($con,"INSERT INTO tb_mhs (id_mhs,nim,nama_mhs,tmp_lahir,tgl_lahir,jk,alamat,email,th_masuk,username,password,foto) 
				VALUES ('','$nim','$nama','$tmp','$tgl','$jk','$alamat','$email','$tahun','$user','$pass','$nama_gambar')") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=v-mhs';
 </script>";
}

}elseif (isset($_POST['E-mhs'])) {
	// Lanjutkan
	$id  = $_POST['id'];
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
	$aktif = $_POST['aktif'];


			mysqli_query($con,"UPDATE tb_mhs SET nim='$nim',nama_mhs='$nama',tmp_lahir='$tmp',tgl_lahir='$tgl',jk='$jk',alamat='$alamat',email='$email',th_masuk='$tahun',username='$user',password='$pass',aktif='$aktif' WHERE id_mhs='$id' ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil DiUbah !!');
 	window.location='?page=v-mhs';
 </script>";

// Simpan Dosen
}elseif (isset($_POST['S-dsn'])) {
	// Lanjutkan
	$nama  = $_POST['nama'];
	$nip   = $_POST['nip'];
	$gelar   = $_POST['gelar'];
	$tmp = $_POST['tmp'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$jurusan = $_POST['jurusan'];
	$fakultas = $_POST['fakultas'];


			$sumber = @$_FILES['foto']['tmp_name'];
			$target = '../_assets/mhs/';
			$nama_gambar = @$_FILES['foto']['name'];

			$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

			if ($pindah) {

			mysqli_query($con,"INSERT INTO tb_dosen (id_dosen,nip,nama_dosen,gelar,t_lahir,tg_lahir,jk,alamat,email,id_jurusan,id_fakultas,foto) 
				VALUES ('','$nip','$nama','$gelar','$tmp','$tgl','$jk','$alamat','$email','$jurusan','$fakultas','$nama_gambar')") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil Ditambahkan !!');
 	window.location='?page=v-dsn';
 </script>";
}

}elseif (isset($_POST['E-dsn'])) {
	// Lanjutkan
	$id  = $_POST['id'];
	$nama  = $_POST['nama'];
	$nip   = $_POST['nip'];
	$gelar   = $_POST['gelar'];
	$tmp = $_POST['tmp'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$jurusan = $_POST['jurusan'];
	$fakultas = $_POST['fakultas'];


			mysqli_query($con,"UPDATE tb_dosen SET nip='$nip',nama_dosen='$nama',gelar='$gelar',t_lahir='$tmp',tg_lahir='$tgl',jk='$jk',alamat='$alamat',email='$email',id_jurusan='$jurusan',id_fakultas='$fakultas' WHERE id_dosen='$id' ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil DiUbah !!');
 	window.location='?page=v-dsn';
 </script>";

}elseif (isset($_POST['S-Jur'])) {
	// Lanjutkan
	$jurusan  = $_POST['jurusan'];



			mysqli_query($con,"INSERT INTO tb_jurusan (id_jurusan,nm_jurusan) VALUES('','$jurusan') ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil Dsimpan !!');
 	window.location='?page=v-jur';
 </script>";
}elseif (isset($_POST['E-Jur'])) {
	// Lanjutkan
	$id  = $_POST['id'];
	$jurusan  = $_POST['jurusan'];



			mysqli_query($con,"UPDATE tb_jurusan SET nm_jurusan='$jurusan' WHERE id_jurusan='$id' ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil DiUbah !!');
 	window.location='?page=v-jur';
 </script>";


// Simpan FAKULTAS
}elseif (isset($_POST['S-Fak'])) {
	// Lanjutkan
	$fakultas  = $_POST['fakultas'];



			mysqli_query($con,"INSERT INTO tb_fakultas (id_fakultas,nm_fakultas) VALUES('','$fakultas') ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil Dsimpan !!');
 	window.location='?page=v-fak';
 </script>";
}elseif (isset($_POST['E-Fak'])) {
	// Lanjutkan
	$id  = $_POST['id'];
	$fakultas  = $_POST['fakultas'];



			mysqli_query($con,"UPDATE tb_fakultas SET nm_fakultas='$fakultas' WHERE id_fakultas='$id' ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil DiUbah !!');
 	window.location='?page=v-fak';
 </script>";


// Simpan kategori
}elseif (isset($_POST['S-Kat'])) {
	// Lanjutkan
	$kategori  = $_POST['kategori'];



			mysqli_query($con,"INSERT INTO tb_kategori (id_kategori,kategori) VALUES('','$kategori') ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil Dsimpan !!');
 	window.location='?page=v-kat';
 </script>";
}elseif (isset($_POST['E-Kat'])) {
	// Lanjutkan
	$id  = $_POST['id'];
	$kategori  = $_POST['kategori'];



			mysqli_query($con,"UPDATE tb_kategori SET kategori='$kategori' WHERE id_kategori='$id' ") or die (mysqli_error($con));

			echo "<script>
 	alert('Data Berhasil DiUbah !!');
 	window.location='?page=v-kat';
 </script>";


}



 ?>

