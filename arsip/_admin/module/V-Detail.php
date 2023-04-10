
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
$query= "SELECT * FROM tb_skripsi
  INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs
  INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori
   -- INNER JOIN tb_fileskripsi ON tb_skripsi.id_skripsi=tb_fileskripsi.id_skripsi
   WHERE tb_skripsi.id_skripsi='$id' ";
$sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
$data= mysqli_fetch_array($sql_ds)



// $id = $_GET['id'];
// $sql = mysqli_query($con,"SELECT 
//   tb_skripsi.*,tb_mhs.id_mhs,tb_mhs.nim,tb_mhs.nama_mhs, tb_kategori.id_kategori,tb_kategori.kategori
//   INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs

//   INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_skripsi.id_skripsi='$id' ");
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
    <td>Kategori Skripsi </td>
    <td>:</td>
    <td><?php echo $data['kategori'] ?></td>
  </tr>
<!--   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr> -->
  <tr>
    <td>Judul Skripsi </td>
    <td>:</td>
    <td><?php echo $data['judul'] ?></td>
  </tr>
  <tr>
    <td>Pembimbing 1 </td>
    <td>:</td>
    <td><?php echo $data['pemb1'] ?></td>
  </tr>
  <tr>
    <td>Pembimbing 2 </td>
    <td>:</td>
    <td><?php echo $data['pemb2'] ?></td>
  </tr>
  <tr>
    <td>Penguji 1 </td>
    <td>:</td>
    <td><?php echo $data['penguji1'] ?></td>
  </tr>
  <tr>
    <td>Penguji 2 </td>
    <td>:</td>
    <td><?php echo $data['penguji2'] ?></td>
  </tr>
</table>
<p>Abstrak :</p>
<p><?php echo $data['abstrak'] ?></p>
<p>Keyword : <?php echo $data['keyword'] ?> </p>




<table width="100%" class="bordered">
  <?php 
$id = $_GET['id'];
$query= "SELECT * FROM tb_skripsi
  -- INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs
  -- INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori
   INNER JOIN tb_fileskripsi ON tb_skripsi.id_skripsi=tb_fileskripsi.id_skripsi
   WHERE tb_skripsi.id_skripsi='$id' ";
$sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
$data= mysqli_fetch_array($sql_ds)



// $id = $_GET['id'];
// $sql = mysqli_query($con,"SELECT 
//   tb_skripsi.*,tb_mhs.id_mhs,tb_mhs.nim,tb_mhs.nama_mhs, tb_kategori.id_kategori,tb_kategori.kategori
//   INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs

//   INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_skripsi.id_skripsi='$id' ");
// $data = mysqli_fetch_array($sql);
 ?>
<tr>
<td>File</td>
<td>:</td>
<td>
 <embed src="<?=$data['file'];?>" type="" width="100%" height="700"> <a href="<?=$data['file'];?>"><?=$data['file'];?></a> </embed>
</td>
</tr>
  <tr>
    <td>Download </td>
    <td>:</td>
    <td><a href="<?=$data['file'];?>" target="_blank" class="btn tooltipped waves-effect waves-light btn-large " data-position="right" data-delay="50" data-tooltip="Download"><i class="mdi-file-file-download right"></i>Download File</a></td>
  </tr>
</table>


            

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