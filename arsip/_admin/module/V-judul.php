
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

              <div class="row">
                  <div class="col s12">
                    <ul class="tabs tab-demo z-depth-1">
                      <li class="tab col s3"><a class="active" href="#test1"> <i class="mdi-av-my-library-books"></i> ALL Data Judul</a>
                      </li>
                       <li class="tab col s3"><a href="#test6"> <i class="mdi-av-my-library-books"></i> Sistem Informasi</a>
                      </li>
                      <li class="tab col s3"><a href="#test2"> <i class="mdi-av-my-library-books"></i> Aplikasi</a>
                      </li>
                      <li class="tab col s3"><a href="#test3"> <i class="mdi-av-my-library-books"></i> Multimedia</a>
                      </li>
                      <li class="tab col s3"><a href="#test5"> <i class="mdi-av-my-library-books"></i> Jaringan</a>
                      </li>
                      <li class="tab col s3"><a href="#test4"> <i class="mdi-av-my-library-books"></i> Kependidikan</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col s12">
                    <div id="test1" class="col s12">
                      <!-- Table -->
                    <h4 class="header">Data Judul Skripsi </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                           <!--  <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                              <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <!-- <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Action</th>
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
                           <!--  <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td> -->
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                            <td>
                            <a href="?page=detail&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="../laporan/Download.php?id=<?php echo $d['id_skripsi'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download Abstrak"><i class="mdi-file-file-download"></i></a>

                        <a href="../laporan/Print.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light yellow darken-2" data-position="left" data-delay="50" data-tooltip="Cetak"><i class="mdi-av-my-library-books"></i></a>

                        <a href="?page=d-judul&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->

                    </div>
                    <div id="test2" class="col s12">
                      <!-- Aplikasi -->

                       <!-- Table -->
                    <h4 class="header">Data Judul Skripsi Aplikasi </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                           <!--  <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                              <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <!-- <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_skripsi INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_kategori.kategori='Aplikasi' ");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                           <!--  <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td> -->
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                            <td>
                            <a href="?page=detail&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="../laporan/Download.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download Abstrak"><i class="mdi-file-file-download"></i></a>

                        <a href="../laporan/Print.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light yellow darken-2" data-position="left" data-delay="50" data-tooltip="Cetak"><i class="mdi-av-my-library-books"></i></a>

                        <a href="?page=d-judul&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->
                       
                    </div>
                    <div id="test3" class="col s12">
                     <!--  Multimedia -->
                      <!-- Table -->
                    <h4 class="header">Data Judul Skripsi Multimedia </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                           <!--  <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                              <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <!-- <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_skripsi INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_kategori.kategori='Media Pembelajaran' ");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                           <!--  <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td> -->
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                            <td>
                              <a href="?page=detail&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="../laporan/Download.php?id=<?php echo $d['id_skripsi'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download Abstrak"><i class="mdi-file-file-download"></i></a>

                        <a href="../laporan/Print.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light yellow darken-2" data-position="left" data-delay="50" data-tooltip="Cetak"><i class="mdi-av-my-library-books"></i></a>

                        <a href="?page=d-judul&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->


                    </div>
                     <div id="test5" class="col s12">
                     <!--  <h2>JARINGAN</h2> -->

                      <!-- Table -->
                    <h4 class="header">Data Judul Skripsi Jaringan </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                           <!--  <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                              <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <!-- <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_skripsi INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_kategori.kategori='Jaringan' ");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                           <!--  <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td> -->
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                            <td>
                         <a href="?page=detail&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="../laporan/Download.php?id=<?php echo $d['id_skripsi'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download Abstrak"><i class="mdi-file-file-download"></i></a>

                        <a href="../laporan/Print.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light yellow darken-2" data-position="left" data-delay="50" data-tooltip="Cetak"><i class="mdi-av-my-library-books"></i></a>

                        <a href="?page=d-judul&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->


                    </div>
                    <div id="test4" class="col s12">
                      <!-- <h2>PENDIDKAN</h2> -->

                       <!-- Table -->
                    <h4 class="header">Data Judul Skripsi Kependidikan </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                           <!--  <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                              <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <!-- <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_skripsi INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_kategori.kategori='Kependidikan' ");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                           <!--  <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td> -->
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                            <td>
                              <a href="?page=detail&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="../laporan/Download.php?id=<?php echo $d['id_skripsi'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download Abstrak"><i class="mdi-file-file-download"></i></a>

                        <a href="../laporan/Print.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light yellow darken-2" data-position="left" data-delay="50" data-tooltip="Cetak"><i class="mdi-av-my-library-books"></i></a>

                        <a href="?page=d-judul&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->



                    </div>
                    <div id="test6" class="col s12">
                      <!-- <h2>PENDIDKAN</h2> -->

                       <!-- Table -->
                    <h4 class="header">Data Judul Skripsi Sistem Informasi </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                           <!--  <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                              <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                           <th>No</th>
                            <!-- <th>Nim</th>
                            <th>Nama Mahasiswa</th> -->
                            <th>Judul Skripsi</th>
                            <th>Kategori</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_skripsi INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori WHERE tb_kategori.kategori='Sistem Informasi' ");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                           <!--  <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td> -->
                            <td><?=$d['judul'];?></td>
                            <td><?=$d['kategori'];?></td>
                            <td><?=$d['tahun'];?></td>
                            <td>
                              <a href="?page=detail&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="../laporan/Download.php?id=<?php echo $d['id_skripsi'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download Abstrak"><i class="mdi-file-file-download"></i></a>

                        <a href="../laporan/Print.php?id=<?php echo $d['id_skripsi'];?> " target="_blank" class="btn tooltipped btn-floating waves-effect waves-light yellow darken-2" data-position="left" data-delay="50" data-tooltip="Cetak"><i class="mdi-av-my-library-books"></i></a>

                        <a href="?page=d-judul&id=<?php echo $d['id_skripsi'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
              

                <!-- End Table -->



                    </div>
                  </div>
                </div>




                


          </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>

          
        
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">

                <a href="javascript:history.back()" class="btn tooltipped btn-floating btn-large" data-position="left" data-delay="50" data-tooltip="Kembali">
                  <i class="mdi-content-undo"></i>
                </a>


                  <a href="?page=t-mhs" class="btn tooltipped btn-floating btn-large waves-effect waves-light green" data-position="top" data-delay="50" data-tooltip="Tambah Data">
                  <i class="mdi-content-add"></i>
                </a>
                <!-- <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul> -->

            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->