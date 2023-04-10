
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
                <h5 class="breadcrumbs-title">Data Dosen</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Dosen</a></li>
                    <li class="active">Detail Data Dosen</li>
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
               
               <div class="container">
                      <?php 
                  $id= $_GET['id'];
                  $sql = mysqli_query($con,"SELECT * FROM tb_dosen
                    INNER JOIN tb_fakultas ON tb_dosen.id_fakultas=tb_fakultas.id_fakultas
                    INNER JOIN tb_jurusan ON tb_dosen.id_jurusan=tb_jurusan.id_jurusan
                    WHERE tb_dosen.id_dosen='$id' ");
                  $data = mysqli_fetch_array($sql);

                   ?>
                 <center><h5><code>Detail Data Dosen</code></h5></center>
                   <!-- <img class="materialboxed " data-caption="<?php echo $data['nama_dosen'] ?>" width="150" height="200" src="../_assets/mhs/<?php echo $data['foto'];?>" style="border-radius: 15px;border:2px solid #212121;"> -->
             
               
                <h5> <code>Data Dosen</code></h5>
                <table class="bordered">
                   <tr>
    <td width="20%">Nip/NIDN</td>
    <td width="1%">:</td>
    <td width="49%"><?php echo $data['nip'] ?></td>
    <td width="40%" rowspan="5"><img src="../_assets/mhs/<?php echo $data['foto'];?>" width="150" height="200" style="border-radius: 15px;border:2px solid #212121;"/></td>
  </tr>
                   <tr>
                   <td>Nama Dosen</td>
                   <td>:</td>
                   <td><?php echo $data['nama_dosen'] ?></td>
                  </tr>
                   <tr>
                   <td>Gelar Akademik</td>
                   <td>:</td>
                   <td> <?php echo $data['gelar'] ?></td>
                  </tr>
                   <tr>
                   <td>Tempat Tgl Lahir</td>
                   <td>:</td>
                   <td><?php echo $data['t_lahir'] ?>,
                  <?php echo $data['tg_lahir'] ?></td>
                  </tr>
                   <tr>
                   <td>Gender</td>
                   <td>:</td>
                   <td><?php echo $data['jk'] ?></td>
                  </tr>
                   <tr>
                   <td>Alamat</td>
                   <td>:</td>
                   <td> <?php echo $data['alamat'] ?></td>
                  </tr>
                   <tr>
                   <td>Email</td>
                   <td>:</td>
                   <td> <?php echo $data['email'] ?></td>
                  </tr>
                   <tr>
                   <td>Dosen</td>
                   <td>:</td>
                   <td> <?php echo $data['nm_fakultas'] ?> | <?php echo $data['nm_jurusan'] ?></td>
                  </tr>
                </table>
                <h5><code>Mahasiswa Bimbingan</code></h5>
                <table class="bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Mahasiswa</th>
                      <th>Skripsi Bimbingan</th>
                      <th>Tahun</th>
                    </tr>
                  </thead>
                  <tbody>
<?php 
$id= $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
                       <?php 
                        $no=1;
                        $query ="SELECT * FROM tb_mhs
                        INNER JOIN tb_skripsi ON tb_mhs.id_mhs=tb_skripsi.id_mhs
                        WHERE pemb1='$data[nama_dosen]'
                        ";
                        $sql = mysqli_query($con,$query);
                        while ($row= mysqli_fetch_array($sql) ) {
                        ?>
                    <tr>
                      <td><?php echo $no++; ?>.</td>
                      <td><?php echo $row['nama_mhs']; ?></td>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['tahun']; ?></td>
                    </tr>
                      <?php
                      }
                      ?>                      
                  </tbody>
                </table>
                <h5><code>Skripsi Yang Di Uji</code></h5>
                <table class="bordered">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Nama Mahasiswa</th>
                      <th>Skripsi Yang Diuji</th>
                      <th>Tahun</th>
                    </tr>
                  </thead>
                  <tbody>

<?php 
$id= $_GET['id'];
$sql = mysqli_query($con,"SELECT * FROM tb_dosen WHERE id_dosen='$id' ");
$data = mysqli_fetch_array($sql);

?>
                       <?php 
                        $no=1;
                        $query ="SELECT * FROM tb_mhs
                        INNER JOIN tb_skripsi ON tb_mhs.id_mhs=tb_skripsi.id_mhs
                        WHERE penguji1='$data[nama_dosen]'
                        ";
                        $sql = mysqli_query($con,$query);
                        while ($row= mysqli_fetch_array($sql) ) {
                        ?>
                    <tr>
                      <td><?php echo $no++; ?>.</td>
                      <td><?php echo $row['nama_mhs']; ?></td>
                      <td><?php echo $row['judul']; ?></td>
                      <td><?php echo $row['tahun']; ?></td>
                    </tr>
                      <?php
                      }
                      ?>                      
                  </tbody>
                </table>
                 
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
                <a href="javascript:history.back()" class="btn-floating btn-large red accent-3">
                  <i class="mdi-content-undo"></i>
                </a>
                       <?php 
                  $id= $_GET['id'];
                  $sql = mysqli_query($con,"SELECT * FROM tb_dosen
                    INNER JOIN tb_fakultas ON tb_dosen.id_fakultas=tb_fakultas.id_fakultas
                    INNER JOIN tb_jurusan ON tb_dosen.id_jurusan=tb_jurusan.id_jurusan
                    WHERE tb_dosen.id_dosen='$id' ");
                  $data = mysqli_fetch_array($sql);

                   ?>

                  <a href="../laporan/lap-perdosen.php?id=<?php echo $data['id_dosen'];?>" target="_blank" class="btn tooltipped btn-floating btn-large waves-effect waves-light light-blue accent-2" data-position="top" data-delay="50" data-tooltip="Cetak Data">
                  <i class="mdi-av-my-library-books"></i>
                </a>
               

            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->