
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
                    <li class="active">Edit Mahasiswa</li>
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
                <h4 class="header2">Form Edit Data Mahasiswa</h4>
                <div class="row">
                  <?php 
                  $id= $_GET['id'];
                  $sql = mysqli_query($con,"SELECT * FROM tb_mhs WHERE id_mhs='$id' ");
                  $d = mysqli_fetch_array($sql);

                   ?>
                  <form class="col s12" action="?page=proses" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="input-field col s6">
                        <input name="nim" id="nim" type="text" value="<?php echo $d['nim']; ?>">
                        <input name="id" value="<?php echo $d['id_mhs']; ?>" type="hidden">
                        <label for="nim">Nim</label>
                      </div>
                      <div class="input-field col s6">
                        <input name="nama" id="Nama Lengkap" type="text" value="<?php echo $d['nama_mhs']; ?>">
                        <label for="Nama Lengkap">Nama Lengkap</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input name="tmp" id="tmp" type="text" value="<?php echo $d['tmp_lahir']; ?>">
                        <label for="tmp">Tempat Lahir</label>
                      </div>
                      <div class="input-field col s6">
                         <input name="tgl" id="tgl" type="date" value="<?php echo $d['tgl_lahir']; ?>" class="datepicker">
                        <!-- <input name="tgl" id="Password" type="date"> -->

                        <label for="tgl">Tanggal Lahir</label> 
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                           <p>Jenis Kelamin</p>
                      <input class="with-gap" name="jk" type="radio" value="Laki-laki" id="test3" <?php if ($d['jk'] == 'Laki-laki') {echo "checked";} ?> />
                      <label for="test3">Laki-laki</label>

                      <input class="with-gap" name="jk" value="Perempuan" type="radio" id="test4"  <?php if ($d['jk'] == 'Perempuan') {echo "checked";} ?> />
                      <label for="test4">Perempuan</label>
                     
                      </div> 
                      <div class="file-field input-field col s6">
                        <input name="email" id="tmp" type="text" value="<?php echo $d['email']; ?>">
                        <label for="email">E-mail</label>                        
                      </div>
                      
                    </div>
                    <div class="row">
                        <div class="input-field col s6">                          
                        <input name="alamat" id="alamat" type="text" value="<?php echo $d['alamat']; ?>">
                        <label for="alamat">Alamat</label>
                        </div>
                        <div class="input-field col s6">
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
                      
                      </div> 

                      </div>
                      <div class="row">
                      <div class="input-field col s6">
                        <input name="user" id="Username" type="text" value="<?php echo $d['username']; ?>">
                        <label for="Username">Username</label>
                      </div>
                      <div class="input-field col s6">
                        <input name="pass" id="Password" type="password" value="<?php echo $d['password']; ?>">
                        <label for="Password">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                           <p>Status User</p>
                      <input class="with-gap" name="aktif" type="radio" value="Y" id="test6" <?php if ($d['aktif'] == 'Y') {echo "checked";} ?> />
                      <label for="test6">Aktif</label>

                      <input class="with-gap" name="aktif" value="T" type="radio" id="test7"  <?php if ($d['aktif'] == 'T') {echo "checked";} ?> />
                      <label for="test7">Tidak Aktif</label>
                     
                      </div> 
                      
                    </div>
                      
                    </div>
                    <div class="row">
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="E-mhs">Simpan
                            <i class="mdi-content-send right"></i>
                      </div>
                          </button>
                        </div>
                    </div>
                  </form>
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
                <a href="javascript:history.back()" class="btn-floating btn-large">
                  <i class="mdi-content-undo"></i>
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