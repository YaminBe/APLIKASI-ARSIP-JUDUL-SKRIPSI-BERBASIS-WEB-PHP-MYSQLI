<?php 
$id = $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM tb_skripsi WHERE id_skripsi='$id'");
$kategori = mysqli_fetch_array($sql);
?>


<div class="panel panel-default">
	<div class="panel-heading">
		<h3><span class="fa fa-search"></span> Berikut Hasil Pencarian berdasarkan Tahun  <code><?php echo $kategori['tahun']; ?></code></h3>
	</div>
	<div class="panel-body">

		<!-- table -->
		<table class="table table-striped table-condensed table-responsive table-hover">
	<hr>
	<thead>
		<tr>
			<th>No.</th>
			<th>Kategori</th>
			<th>Judul</th>
			<th>Tahun</th>
			<th>More</th>
		</tr>
	</thead>
	<tbody>
			<?php 
			$no=1;
			$sql = mysqli_query($con,"SELECT * FROM tb_skripsi 
				INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori

				WHERE tb_skripsi.tahun='$kategori[tahun]' ");
			while ($d= mysqli_fetch_array($sql) ) {
			?>
		<tr>
			<td><?php echo $no++ ?>.</td>
			<td><?php echo $d['kategori'] ?></td>
			<td><?php echo $d['judul'] ?></td>
			<td><?php echo $d['tahun'] ?></td>
			<td><a href="?page=detail&id=<?php echo $d['id_skripsi']; ?>" class="btn btn-success btn-xs"> <span class="fa fa-search-plus"></span> Detail </a></td>
		</tr>
			<?php
			}
			?>
	</tbody>
</table>
		
	</div>
	
</div>

