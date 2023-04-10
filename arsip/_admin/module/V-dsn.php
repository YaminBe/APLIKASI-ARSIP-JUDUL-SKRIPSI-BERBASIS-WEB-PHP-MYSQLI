
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
                    <li class="active">Lihat Dosen</li>
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
                    <h4 class="header">Data Dosen </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Nama Dosen</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Fakultas</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nip</th>
                            <th>Nama Dosen</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Fakultas</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        // $sql = mysqli_query($con,"SELECT * FROM tb_dosen");
                        

                            $query= "SELECT * FROM tb_dosen
                            INNER JOIN tb_jurusan ON tb_dosen.id_jurusan = tb_jurusan.id_jurusan
                            INNER JOIN tb_fakultas ON tb_dosen.id_fakultas = tb_fakultas.id_fakultas ";
                            $sql_ds = mysqli_query($con,$query) or die(mysqli_error($con)) ;
                        while ( $data= mysqli_fetch_array($sql_ds) ) { ?>
                        <tr>
                            <td><?=$no++?> </td>
                            <td><?=$data['nip'];?> </td>
                            <td><?=$data['nama_dosen'];?>,<?=$data['gelar'];?></td>
                            <td><?=$data['email'];?></td>
                            <td><?=$data['nm_jurusan'];?></td>
                            <td><?=$data['nm_fakultas'];?></td>
                            <td>
                        <a href="?page=e-dsn&id=<?php echo $data['id_dosen'];?> " class="btn tooltipped btn-floating waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Edit Data"><i class="mdi-content-create"></i></a>

                        <a href="?page=d-dsn&id=<?php echo $data['id_dosen'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
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


                  <a href="?page=t-dsn" class="btn tooltipped btn-floating btn-large waves-effect waves-light green" data-position="top" data-delay="50" data-tooltip="Tambah Data">
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