
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
                <h5 class="breadcrumbs-title">Data Mahasiswa</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Mahasiswa</a></li>
                    <li class="active">Lihat Mahasiswa</li>
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

                <!-- Table -->
                <div class="col s12 m8 l9">
                    <h4 class="header">Data Mahasiswa </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>T.Tgl Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Tahun Masuk</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama Mahasiswa</th>
                            <th>T.Tgl Lahir</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Tahun Masuk</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_mhs");
                        while ($d= mysqli_fetch_array($sql) ) {
                            # code...
                        

                         ?>
                        <tr>
                            <td><?=$no++?> </td>
                            <td><?=$d['nim'];?> </td>
                            <td><?=$d['nama_mhs'];?></td>
                            <td><?=$d['tmp_lahir'];?>, <?=$d['tgl_lahir'];?></td>
                            <td><?=$d['alamat'];?></td>
                            <td><?=$d['email'];?></td>
                            <td><?=$d['th_masuk'];?></td>
                            <td>
                                <img src="../_assets/mhs/<?=$d['foto'];?>" width="50" height="50" style="border-radius: 100%;"></td>
                            <td>
                        <a href="?page=e-mhs&id=<?php echo $d['id_mhs'];?> " class="btn tooltipped btn-floating waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Edit Data"><i class="mdi-content-create"></i></a>

                        <a href="?page=d-mhs&id=<?php echo $d['id_mhs'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                            </td>
                        </tr>
                        <?php
                         }
                          ?>
                        
                    </tbody>
                  </table>
                </div>

                <!-- End Table -->


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