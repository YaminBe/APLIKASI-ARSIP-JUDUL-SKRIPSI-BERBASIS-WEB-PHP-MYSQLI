
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
                <h5 class="breadcrumbs-title">Laporan Judul Skripsi</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Skripsi</a></li>
                    <li class="active">Laporan Judul Skripsi</li>
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

<!--           <form action="../laporan/skripsi-tahunan.php" target="_blank" method="post">
          <table class="responsive-table display">
          <thead>
            <tr>
              <th>Tahun</th>
              <th>:</th>                  
              <th>
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
              </th>
              <th>
                <button class="btn cyan waves-effect waves-light right" type="submit">Cetak
                <i class="mdi-content-content-copy"></i>
                </button>
                </th>
            </tr>
          </thead>
        </table>
          </form>
          <form action="../laporan/skripsi-kat.php" target="_blank" method="post">    
          <table>
          <thead>
            <tr>
              <th>Kategori</th>
              <th>:</th>
                <th>
                  <select name="id_kategori">
                  <option value="" selected>- Pilih Kategori -</option>
                    <?php
                    $sqlGuru=mysqli_query($con, "SELECT * FROM tb_kategori");
                    while($g=mysqli_fetch_array($sqlGuru)){
                    echo "<option value='$g[id_kategori]'>$g[kategori]</option>";
                    }
                    ?>
                  </select>
                </th>
               <th>
                  <?php
                  $now=date('Y');
                  echo "<select name='tahun'";
                  for ($a=2006;$a<=$now;$a++)
                  {
                  // echo "<option>--Pilih Tahun--</option>";
                  echo "<option value='$a'>$a</option>";
                  }
                  echo "</select>";
                  ?>
                <label>Tahun</label>
              </th>
              <th>
                <button class="btn pink waves-effect waves-light right" type="submit" name="S-mhs">Cetak
                <i class="mdi-content-content-copy"></i>
                </button>
              </th>
              
            </tr>
          </thead>
          </table>
          </form> -->



              <div class="col s12">
                      <!-- Table -->
                    <h4 class="header">LAPORAN DATA JUDUL SKRIPSI</h4> 

                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_skripsi INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->

                    </div>
                </div>
<a href="../laporan/skripsiall-print.php" target="_blank" class="waves-effect waves-light btn "><i class="mdi-content-content-copy"></i>Cetak</a>
<a href="../laporan/skripsiall-pdf.php" target="_blank" class="waves-effect waves-light btn "><i class="mdi-file-file-download"></i>Download PDF</a>
<a href="../laporan/skripsiall-excell.php" target="_blank" class="waves-effect waves-light btn "><i class="mdi-av-my-library-books"></i> Expot To Excell</a>
                

       <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">
    <i class="mdi-content-content-copy"></i> Laporan Pertahun</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content" style="min-height: 400px;">
      <h4>Laporan</h4>
      <p>A bunch of text</p>
      <form action="../laporan/skripsi-tahunan.php" target="_blank" method="post">
          <table class="responsive-table display">
          <thead>
            <tr>
              <th>Tahun</th>
              <th>:</th>                  
              <th>
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
              </th>
              <th>
                <button class="btn cyan waves-effect waves-light right" type="submit">Cetak
                <i class="mdi-content-content-copy"></i>
                </button>
                </th>
            </tr>
          </thead>
        </table>
          </form>
          <form action="../laporan/skripsi-kat.php" target="_blank" method="post">    
          <table>
          <thead>
            <tr>
              <th>Kategori</th>
              <th>:</th>
                <th>
                  <select name="id_kategori">
                  <option value="" selected>- Pilih Kategori -</option>
                    <?php
                    $sqlGuru=mysqli_query($con, "SELECT * FROM tb_kategori");
                    while($g=mysqli_fetch_array($sqlGuru)){
                    echo "<option value='$g[id_kategori]'>$g[kategori]</option>";
                    }
                    ?>
                  </select>
                </th>
               <th>
                  <?php
                  $now=date('Y');
                  echo "<select name='tahun'";
                  for ($a=2006;$a<=$now;$a++)
                  {
                  // echo "<option>--Pilih Tahun--</option>";
                  echo "<option value='$a'>$a</option>";
                  }
                  echo "</select>";
                  ?>
                <label>Tahun</label>
              </th>
              <th>
                <button class="btn pink waves-effect waves-light right" type="submit" name="S-mhs">Cetak
                <i class="mdi-content-content-copy"></i>
                </button>
              </th>
              
            </tr>
          </thead>
          </table>
          </form>

        <!-- <table>
          <thead>
            <tr>
              <th>Tahun</th>
              <th>:</th>
                <form action="../laporan/skripsi-tahunan.php" target="_blank" method="post">
                  
                   <th>
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
              </th>
              <th></th>
              <th>
                <button class="btn cyan waves-effect waves-light right" type="submit">Cetak
                <i class="mdi-content-content-copy"></i>
                </button>
                </th>
                </form>
            </tr>
            <tr>
              <th>Kategori</th>
              <th>:</th>
                <form action="../laporan/skripsi-kat.php" target="_blank" method="post">                  
                <th>
               <select name="id_kategori">
                          <option value="" selected>- Pilih Kategori -</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_kategori");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[id_kategori]'>$g[kategori]</option>";
                            }
                            ?>
                        </select>
              </th>
               <th>
                        <?php
                $now=date('Y');
                echo "<select name='tahun'";
                for ($a=2006;$a<=$now;$a++)
                {
                // echo "<option>--Pilih Tahun--</option>";
                echo "<option value='$a'>$a</option>";
                }
                echo "</select>";
                ?>
                <label>Tahun</label>
              </th>
              <th>
                <button class="btn pink waves-effect waves-light right" type="submit" name="S-mhs">Cetak
                <i class="mdi-content-content-copy"></i>
                </button>
                </th>
                </form>
            </tr>
        </table> -->
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"> Close</a>
    </div>
  </div>         


          </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>

          
        
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">

                <a href="javascript:history.back()" class="btn tooltipped btn-floating btn-large" data-position="left" data-delay="50" data-tooltip="Kembali">
                  <i class="mdi-content-undo"></i>
                </a><!-- 


                  <a href="?page=t-mhs" class="btn tooltipped btn-floating btn-large waves-effect waves-light green" data-position="top" data-delay="50" data-tooltip="Tambah Data">
                  <i class="mdi-content-add"></i>
                </a> -->

            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->