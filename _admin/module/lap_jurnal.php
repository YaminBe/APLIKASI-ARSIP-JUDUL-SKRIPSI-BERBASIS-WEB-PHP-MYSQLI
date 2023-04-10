
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
                <h5 class="breadcrumbs-title">Laporan Jurnal</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Jurnal</a></li>
                    <li class="active">Laporan Jurnal Skripsi</li>
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
                    <h4 class="header">Laporan Jurnal Mahasiswa </h4>
                  <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Jurnal</th>
                            <th>Tipe File</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                 
                    <tfoot>
                        <tr>
                          <th>No</th>
                            <th>Judul Jurnal</th>
                            <th>Tipe File</th>
                            <th>Tahun</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                 
                    <tbody>
                        <?php 
                        $no=1;
                        $sql = mysqli_query($con,"SELECT * FROM tb_jurnal INNER JOIN tb_mhs ON tb_jurnal.id_mhs=tb_mhs.id_mhs ");
                        while ($d= mysqli_fetch_array($sql) ) {
                        ?>
                        <tr>
                            <td><?=$no++?> </td>
                            <td><?=$d['nama_file'];?></td>
                            <td><?=$d['tipe_file'];?></td>
                             <td><?=$d['tahun'];?></td>

                            <td>
                            <a href="?page=v-jurnaldetail&id=<?php echo $d['id_jurnal'];?> " class="btn tooltipped btn-floating waves-effect waves-light purple" data-position="left" data-delay="50" data-tooltip="Lihat Detail"><i class="mdi-action-find-in-page"></i></a>

                        <a href="<?=$d['file'];?>" target="_blank" class="btn tooltipped btn-floating waves-effect waves-light cyan darken-2" data-position="left" data-delay="50" data-tooltip="Download"><i class="mdi-file-file-download"></i></a>

                      <!--   <a href="?page=d-jurnal&id=<?php echo $d['id_jurnal'];?> " class="btn tooltipped btn-floating waves-effect waves-light red" data-position="top" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a> -->
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

            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->