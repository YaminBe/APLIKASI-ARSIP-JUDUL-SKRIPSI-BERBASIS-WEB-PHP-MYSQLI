<div class="banner-bottom-icons">
<div class="container">
	<div class="w3l-heading">
		<!-- <h2 class="w3ls_head"> Data Penduduk </h2> -->
	</div>
<!-- 	<?php 
	 $koneksi = new mysqli('localhost','root','','revi_db');

	$jml =mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_penduduk"));
	 ?>

	<h3> Jumlah Data Penduduk  : <b><?php echo $jml; ?> </b></h3>
	<hr> -->
		<!-- Ini isi -->
<!-- 	<table class="table table-responsive table-condensed">
			<tr>
				<td>Cari Nama Penduduk</td>
				<td> : </td>
				<td>
					<input type="text" name="" class="form-control">
				</td>
				<td>
					<button type="submit"> Cari</button>
				</td>
			</tr>

	</table> -->
	<!-- 	<div class="panel panel-default">
			<div class="panel-heading">
				<h3><span class="fa fa-file"></span> Data Penduduk</h3>
				
			</div> -->
			<div class="panel-body">
			<!-- <form class="form-inline" action="" method="post">
				<div class="form-group">
				<label class="sr-only" for="exampleInputEmail3"></label>
				<input type="taxt" name="keyword" class="form-control" id="exampleInputEmail3" placeholder="Masukkan Nama / NIK" size="70">
				</div>

			<button type="submit" class="btn btn-danger" name="cari"> <span class="fa fa-search"></span> Cari Data</button>
			</form> -->
			<h3><b>Berikut Data Yang Anda Cari</b></h3>
			<hr>


		
    <?php 
    //koneksi
// $koneksi = mysqli_connect("localhost","root","","db_kompre");
     $koneksi = new mysqli('localhost','root','','db_arsip1');
    if (isset($_POST['cari'])) {
      //variable
      $keyword = $_POST['keyword'];
      $query = $koneksi->query("SELECT * FROM tb_skripsi
  INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs
  INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_skripsi.judul LIKE '%$keyword%' OR tb_skripsi.tahun LIKE '%$keyword%' ");
      $row = mysqli_num_rows($query);
      if ($row==0) {
        ?>
			<div class="alert alert-danger" role="alert" style="background-color: #f50057;color: #fff;">
			<strong style="font-size: 23px;"> <span class="fa fa-ban"></span> Maaf !!</strong> Judul Atau Referensi Yang Anda Cari Tidak Ditemukan !

			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			</div>
        <?php
      }else{
          ?>

          <table class="table table-responsive table-condensed table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
						<th>Kategori</th>
						<th>Tahun</th>
						<th>More</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($query as $row) {
						@$no ++;						
						$nama_file = $row ['judul'];
						$tipe_file = $row ['kategori'];
						$tahun = $row ['tahun'];
						$data = $row ['id_skripsi'];
					

					 ?>
					<tr>
						<td><?php echo $no; ?>.</td>
						<td><?php echo $nama_file; ?></td>
						<td><?php echo $tipe_file; ?></td>
						<td><?php echo $tahun; ?></td>
						<td> <a href="?page=detail&id=<?php echo $data; ?>" class="btn btn-success btn-xs"> <span class="fa fa-search-plus"></span> Detail </a></td>
					</tr>
				<?php
				 }
				  ?>
				</tbody>
			</table>


          
		<?php
			}
				}

				?>
		

          


			

				
			</div>
			
	<!-- 	</div> -->

	<!-- akhir isi -->
	</div>
</div>
