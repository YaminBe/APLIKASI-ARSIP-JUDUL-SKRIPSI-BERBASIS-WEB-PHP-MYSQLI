
        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Upload File</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Upload File</a></li>
                    <li class="active">Upload File Jurnal</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
          <div class="section">
            <!--Form Advance-->          
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <h4 class="header2">Form Upload File Jurnal</h4>
                <div class="row">
                  <form class="col s12" action="" method="POST" enctype="multipart/form-data">
                  	<div class="row">
                      <div class="input-field col s12">
                        <select name="id_mhs">
                          <option value="" selected>- Pilih Mahasiswa-</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_mhs ORDER BY id_mhs ASC");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[id_mhs]'>$g[nama_mhs]</option>";
                            }
                            ?>
                        </select>
                        <label>Mahasiswa</label>
                      </div>
                  </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input name="nama" id="judul" type="text">
                        <label for="judul">Judul Jurnal</label>
                      </div>
                    </div>

					<div class="col s12">
						<p>
						Silahkan Upload file dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .exe, .zip, .jpg, .png dan besar file (file size) maksimal hanya 2 MB.
						</p>
					<input type="file" name="file" id="input-file-now" class="dropify" data-default-file="" />
					</div>
                    
                    <div class="row">
                      <div class="input-field col s6">
                         <div class="input-field col s6">
                          <?php
                        $now=date('Y');
                        echo "<select name='tahun'";
                        for ($a=2006;$a<=$now;$a++)
                        {
                        echo "<option value='$a'>$a</option>";
                        }
                        echo "</select>";
                        ?>
                        <label>Tahun Masuk</label>
                      
                      </div>
                     
                   
                      <div class="row">
                        <div class="input-field col s12">
                          <input class="btn cyan waves-effect waves-light" onClick="return confirm('Apakah Anda yakin?')" type="submit" name="upload" value="Upload Sekarang">
                        
                        </div>
                      </div>
                    </div>
                  </form>
<?php
include '../koneksi.php';

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

$bytes = max($bytes, 0); 
$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
$pow = min($pow, count($units) - 1); 

$bytes /= pow(1024, $pow); 

return round($bytes, $precision) . ' ' . $units[$pow]; 
} 

if(@$_POST['upload']){
$allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');

$file_name    = $_FILES['file']['name'];
$file_ext     = strtolower(end(explode('.', $file_name)));
$file_size    = $_FILES['file']['size'];
$file_tmp     = $_FILES['file']['tmp_name'];

$id_mhs       = $_POST['id_mhs'];
$tahun        = $_POST['tahun'];
$nama         = $_POST['nama'];
$tgl          = date("Y-m-d");


if(in_array($file_ext, $allowed_ext) === true){
if($file_size < 3044070){
$lokasi = '../file/'.$nama.'.'.$file_ext;
move_uploaded_file($file_tmp, $lokasi);
$in = mysqli_query($con,"INSERT INTO tb_jurnal (

	id_jurnal,id_mhs,tahun,tanggal_upload,nama_file,tipe_file,ukuran_file,file) VALUES(NULL,'$id_mhs','$tahun','$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
if($in){

}else{
echo '<div class="error">ERROR: Gagal upload file!</div>';
}
}else{
echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
}
}else{
echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
}
}

?> 



                </div>
              </div>
            </div>
          </div>


            
                  </div>
                </div>

          </div>
          <br><br><br><br><br><br><br><br><br>

          
        
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a href="javascript:history.back()" class="btn-floating btn-large">
                  <i class="mdi-content-undo"></i>
                </a>

            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->