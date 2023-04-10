
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
                <h5 class="breadcrumbs-title">Data Judul Skripsi</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Skripsi</a></li>
                    <li class="active">Lihat Judul Skripsi</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        <!--start container-->
        <div class="container">
          <div class="section">
            <div class="card-panel">
<?php 
$id = $_GET['id'];
$query= "SELECT * FROM tb_jurnal
  INNER JOIN tb_mhs ON tb_jurnal.id_mhs=tb_mhs.id_mhs
   WHERE tb_jurnal.id_jurnal='$id' ";
$sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
$data= mysqli_fetch_array($sql_ds)



// $id = $_GET['id'];
// $sql = mysqli_query($con,"SELECT 
//   tb_jurnal.*,tb_mhs.id_mhs,tb_mhs.nim,tb_mhs.nama_mhs, tb_kategori.id_kategori,tb_kategori.kategori
//   INNER JOIN tb_mhs ON tb_jurnal.id_mhs=tb_mhs.id_mhs

//   INNER JOIN tb_kategori ON tb_jurnal.id_kategori=tb_kategori.id_kategori WHERE tb_jurnal.id_skripsi='$id' ");
// $data = mysqli_fetch_array($sql);
 ?>

<table width="100%" class="bordered">
  <tr>
    <td>Nim</td>
    <td>:</td>
    <td><?php echo $data['nim'] ?></td>
  </tr>
  <tr>
    <td>Nama Mahasiswa </td>
    <td>:</td>
    <td><?php echo $data['nama_mhs'] ?></td>
  </tr>
  <tr>
    <td>Tahun Angkatan </td>
    <td>:</td>
    <td><?php echo $data['tahun'] ?></td>
  </tr>
  <tr>
    <td>Judul Jurnal Skripsi </td>
    <td>:</td>
    <td><?php echo $data['nama_file'] ?></td>
  </tr>
  <tr>
    <td>File Jurnal </td>
    <td>:</td>
    <td><embed src="<?=$data['file'];?>" type="" width="100%" height="700"> <a href="<?=$data['file'];?>"><?=$data['file'];?></a> </embed></td>
  </tr>
   <tr>
    <td>Download </td>
    <td>:</td>
    <td><a href="<?=$data['file'];?>" target="_blank" class="btn tooltipped waves-effect waves-light btn-large " data-position="right" data-delay="50" data-tooltip="Download"><i class="mdi-file-file-download right"></i>Download File</a></td>
  </tr>
</table>
 <p>
 
 <!--   <a href="<?=$data['file'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download"><i class="mdi-file-file-download"></i></a> -->


  

 </p>

            

          </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>

          
        
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">

                <a href="javascript:history.back()" class="btn tooltipped btn-floating btn-large" data-position="left" data-delay="50" data-tooltip="Kembali">
                  <i class="mdi-content-undo"></i>
                </a>

            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->