
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
                <h5 class="breadcrumbs-title">Halaman Admin</h5>
                <ol class="breadcrumbs">
                 <li class="active">
                    <div class="chip pink accent-3 lighten-2 white-text">
                      <img src="../_assets/user/<?php echo $data['foto'];?> " alt="Contact Person">
                       Hai ! <code><?php echo $data['namalengkap'] ?></code>  Anda Login Sebagai Administrator <i class="material-icons mdi-navigation-close"></i>
                    </div>
                </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->
        

        <!--start container-->
        <div class="container">
            <div class="row">
              <div class="col s6">
                <?php 
include '../koneksi.php';
// 2007
$skripsi =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_skripsi"));
$jurnal =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_jurnal"));
$mhs =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_mhs"));
$dosen =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_dosen"));
?>
                 <div class="card">
                <div class="card-content">
                  <span class="card-title"> <i class="mdi-action-dashboard"></i> Dashboard</span>
                  <hr>

                          
                            <a href="?page=v-judul" title="">
                              <div class="col s6">
                              <div class="card">
                                <div class="card-content pink accent-3 white-text">
                                <h5><p class="card-stats-title">Jumlah Skripsi</p></h5>
                                <h4 class="card-stats-number"><i class="mdi-image-filter-none" style="font-size: 80px;padding-top: 20px;"></i> <?php echo $skripsi ?></h4>                                       
                                </div>
                              </div>
                            </div>
                            </a>

                            <a href="?page=v-jurnal" title="">
                               <div class="col s6">
                              <div class="card">
                                <div class="card-content blue white-text">
                                <h5><p class="card-stats-title">Jumlah Jurnal</p></h5>
                                <h4 class="card-stats-number"><i class="mdi-av-my-library-books" style="font-size: 80px;padding-top: 20px;"></i> <?php echo $jurnal ?></h4>                                       
                                </div>
                              </div>
                            </div>
                            </a>

                            <a href="?page=v-mhs" title="">
                               <div class="col s6">
                              <div class="card">
                                <div class="card-content grey darken-4 white-text">
                                <h5><p class="card-stats-title">Jumlah Mahasiswa</p></h5>
                                <h4 class="card-stats-number"><i class="mdi-social-people-outline" style="font-size: 80px;padding-top: 20px;"></i> <?php echo $mhs ?></h4>                                       
                                </div>
                              </div>
                            </div>
                            </a>

                             <a href="?page=v-dsn" title="">
                               <div class="col s6">
                              <div class="card">
                                <div class="card-content purple accent-3 white-text">
                                <h5><p class="card-stats-title">Jumlah Dosen</p></h5>
                                <h4 class="card-stats-number"><i class="mdi-social-people" style="font-size: 80px;padding-top: 20px;"></i> <?php echo $dosen ?></h4>                                       
                                </div>
                              </div>
                            </div>
                             </a>
                        
                 
                </div>
              </div>

              </div>

              <div class="col s6">
                 <div class="card">
                <div class="card-content">
                  <span class="card-title"> <i class="mdi-social-notifications-on"></i> Pemberitahuan</span>
              <hr>
                  <?php
                    $tampil=mysqli_query($con,"SELECT * FROM tb_skripsi
                      INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs

                     ORDER BY tb_skripsi.id_skripsi DESC LIMIT 2");
                    while($data2=mysqli_fetch_array($tampil)){
                    ?>
               <!--  <div class="chip red lighten-2 white-text">
                <img src="../_assets/user/<?php echo $data['foto'];?> " alt="Contact Person">
                <?php echo $data2['nama_mhs'] ?> | Telah Mendaftar / Ditambahkan 
                <i class="material-icons mdi-navigation-close"></i>
                </div> -->
               <div id="card-alert" class="card light-blue">
                      <div class="card-content white-text">
                        <p class="single-alert">
                          <img src="../_assets/mhs/<?php echo $data2['foto'];?>" alt="avatar" class="alert-circle responsive-img valign profile-image"/>
                          <span><code><b><?php echo $data2['nama_mhs'] ?> ! </b></code> Telah MengUpload Skripsi </span>..<a href="?page=detail&id=<?php echo $data2['id_skripsi'];?> " style="color: #eeff41;"> <b> Lihat Detail</b></a>
                        </p>
                      </div>
                     <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div> 


                    <!-- <div class="chip blue lighten-1 white-text">
                      <img src="../_assets/mhs/<?php echo $data2['foto'];?>" alt="Contact Person">
                       <code><b><?php echo $data2['nama_mhs'] ?> | </b></code> | Telah MengUpload Skripsi ..<a href="?page=detail&id=<?php echo $data2['id_skripsi'];?> " style="color: #eeff41;"> <b> Lihat Detail</b></a><i class="material-icons mdi-navigation-close"></i>
                    </div>
                    <br>
                    <br> -->
                  <?php } ?>
                  <?php
                    $tampil=mysqli_query($con,"SELECT * FROM tb_jurnal
                      INNER JOIN tb_mhs ON tb_jurnal.id_mhs=tb_mhs.id_mhs

                     ORDER BY tb_jurnal.id_jurnal DESC LIMIT 2");
                    while($data3=mysqli_fetch_array($tampil)){
                    ?>
               <div id="card-alert" class="card  red accent-3">
                      <div class="card-content white-text">
                        <p class="single-alert">
                          <img src="../_assets/mhs/<?php echo $data3['foto'];?>" alt="avatar" class="alert-circle responsive-img valign profile-image"/>
                          <span><code><b><?php echo $data3['nama_mhs'] ?> ! </b></code> Telah Meng Upload File Jurnal </span>..<a href="?page=v-jurnaldetail&id=<?php echo $data3['id_jurnal'];?> " style="color: #eeff41;"> <b> Lihat Detail</b></a>
                        </p>
                      </div>
                     <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div> 
                  <?php } ?>
              
            </div>
          </div>
                
            </div>
            </div> 
            <br> <br> <br> <br> <br>

        </div>
        <!--end container-->