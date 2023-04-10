
<h3><b> <span class="fa fa-search"></span> Pencarian berdasarkan Tahun Angkatan</b></h3>
			<hr>

<div class="col-md-4">
<?php
$tampil=mysqli_query($con,"SELECT * FROM tb_skripsi GROUP BY tahun");
while($data3=mysqli_fetch_array($tampil)){
?>


	<div class="list-group">
<!--   <a href="#" class="list-group-item active">
    Cras justo odio
  </a> -->
  <a href="?page=tahun&id=<?php echo $data3['id_skripsi']; ?>" class="list-group-item" style="background-color: #40c4ff;color: black;"><?php echo $data3['tahun'] ?></a>
  
</div>
	


<!-- 
<ul>
	<li>
<a href="?page=kategori&id=<?php echo $data3['id_kategori']; ?>" class="btn btn-info btn-block"> <?php echo $data3['kategori'] ?></a> <br>
</li>
</ul> -->

<?php } ?>	

</div>
