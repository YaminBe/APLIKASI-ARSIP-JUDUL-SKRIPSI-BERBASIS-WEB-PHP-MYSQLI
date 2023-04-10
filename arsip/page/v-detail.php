<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-body">
        <?php 
$id = $_GET['id'];
include 'koneksi.php';
$query= "SELECT * FROM tb_skripsi
  INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs
  INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori
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

<table width="100%" class="table table-condensed">
<thead>
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
  <tr>
    <td>Judul Skripsi </td>
    <td>:</td>
    <td><?php echo $data['judul'] ?></td>
  </tr>
</thead>
</table>
<p>Abstrak :</p>
<p><?php echo $data['abstrak'] ?></p>
<p>Keyword : <?php echo $data['keyword'] ?> </p>




<table width="100%" class="bordered">
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
    <td><a href="file/<?=$data['file'];?>" target="_blank" class="btn btn-danger" ><i class="fa fa-download"></i> Download File</a></td>
  </tr>
</table>
      
    </div>
    
  </div>

  
</div>