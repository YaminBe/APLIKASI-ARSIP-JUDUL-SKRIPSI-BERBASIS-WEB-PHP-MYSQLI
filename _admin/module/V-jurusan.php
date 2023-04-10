
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
                <h5 class="breadcrumbs-title"> Data Master</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Jurusan</a></li>
                    <li class="active">Data Jurusan</li>
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



          	<!--Bordered Table-->
            <div id="striped-table">
              <h4 class="header">Data Jurusan</h4>
              <div class="row">
                <div class="col s12">
                  <table class="striped">
                    <thead>
                      <tr>
                        <th data-field="id">No.</th>
                        <th data-field="name">Nama Jurusan</th>
                        <th data-field="price">Action</th>
                      </tr>
                    </thead>
                    <tbody>

						<?php 
						$no=1;
						$sql_User = mysqli_query($con, "SELECT * FROM tb_jurusan") or die(mysqli_error($con)) ;
						while ($d = mysqli_fetch_array($sql_User)) {
						?>
                      <tr>
                        <td> <?=$no++?>. </td>
                        <td><?=$d['nm_jurusan'];?></td>
                   
                        <td>
                        <a href="?page=e-jur&id=<?php echo $d['id_jurusan'];?> " class="btn tooltipped btn-floating waves-effect waves-light blue" data-position="left" data-delay="50" data-tooltip="Edit Data"><i class="mdi-content-create"></i></a>

                        <a href="?page=d-jur&id=<?php echo $d['id_jurusan'];?> " class="btn tooltipped btn-floating waves-effect waves-light" data-position="right" data-delay="50" data-tooltip="Hapus Data"><i class="mdi-content-clear"></i></a>
                        </td>
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



            
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
          </div>

          
        
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">

                <a href="javascript:history.back()" class="btn tooltipped btn-floating btn-large" data-position="left" data-delay="50" data-tooltip="Kembali">
                  <i class="mdi-content-undo"></i>
                </a>


                  <a href="?page=t-jur" class="btn tooltipped btn-floating btn-large waves-effect waves-light green" data-position="left" data-delay="50" data-tooltip="Tambah Data">
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