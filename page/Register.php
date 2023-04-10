<h3 class="pos-title text-center">Buat
			<span>Akun</span> Baru</h3>
	<hr>
	<div class="panel panel-info">
		
		 <div class="panel-heading">Isilah Form Berikut Dengan Data Yang Valid *</div>
  <div class="panel-body">
<p class="text-danger"> Form Registrasi Ini Digunakan Untuk Mahasiswa Mahasiswa Akhir Yang Ingin Mengupload Skripsi ..</p>
  	<div class="row">
  	<div class="col-md-8">
		  <form action="?page=proses" method="post" enctype="multipart/form-data">
		  	<div class="row">
		  <div class="col-md-12">
		  	<div class="form-group">
		    <label for="nim">Nim *</label>
		    <input type="text" name="nim" class="form-control" id="nim" placeholder="Nim" required>
		  </div>		  	
		  </div>
		</div>
		  <div class="row">
		  <div class="col-md-12">
		  <div class="form-group">
		    <label for="nama">Nama Lengkap *</label>
		    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
		  </div>
		</div>
	</div>
		<div class="row">
		  <div class="col-md-6">
		  <div class="form-group">
		    <label for="tmp">Tempat Lahir *</label>
		    <input type="text" name="tmp" class="form-control" id="tmp" placeholder="Tempat Lahir" required>
		  </div>
		</div>
		  <div class="col-md-6">
		  <div class="form-group">
		    <label for="nama">Tanggal Lahir *</label>
		    <input type="date" name="tgl" class="form-control" id="nama" required>
		  </div>
		</div>
	</div>
	<div class="row">
		  <div class="col-md-12">
			  <div class="form-group">
			    <label for="nama">Jenis Kelamin *</label>
					<div class="radio">
					  <label for="optionsRadios1">
					    <input type="radio" name="jk" id="optionsRadios1" value="Laki-laki">
					    Laki-laki
					  </label> <br>
					   <label for="optionsRadios2">
					    <input type="radio" name="jk" id="optionsRadios2" value="Perempuan">
					    Perempuan
					  </label>
					</div>

			  </div>
		</div>
	</div>
	<div class="row">
		  <div class="col-md-12">
			  <div class="form-group">
			    <label for="nama">Alamat *</label>
			    <textarea name="alamat" type="text" class="form-control" id="nama" placeholder="Alamat"></textarea>
			  </div>
		</div>
	</div>
	<div class="row">
		  <div class="col-md-6">
			  <div class="form-group">
			    <label for="nama">Tahun Masuk *</label>
			     <?php
	                $now=date('Y');
	                echo "<select class='form-control' name='tahun'";
	                for ($a=2006;$a<=$now;$a++)
	                {
	                echo "<option value='$a'>$a</option>";
	                }
	                echo "</select>";
	                ?>
			  </div>
		</div>
		<div class="col-md-6">
		  <div class="form-group">
		    <label for="nama">Email *</label>
		    <input name="email" type="email" class="form-control" id="nama" placeholder="Email" required>
		  </div>
		</div>
	</div>
			<div class="row">
		  <div class="col-md-6">
		  <div class="form-group">
		    <label for="nama">Username *</label>
		    <input name="user" type="text" class="form-control" id="nama" placeholder="Username" required>
		  </div>
		</div>
		  <div class="col-md-6">
		  <div class="form-group">
		    <label for="nama">Password *</label>
		    <input name="pass" type="text" class="form-control" placeholder="Password" id="nama"required>
		  </div>
		</div>
	</div>




		  <div class="form-group">
		    <label for="exampleInputFile">Upload Foto</label>
		    <input name="foto" type="file" id="exampleInputFile">
		    <!-- <p class="help-block">Example block-level help text here.</p> -->
		  </div>
		  <input type="submit" name="daftar" class="btn btn-info btn-lg" value="Daftar">
		</form>

  		
  	</div>
  		
  	</div>



  </div>
</div>