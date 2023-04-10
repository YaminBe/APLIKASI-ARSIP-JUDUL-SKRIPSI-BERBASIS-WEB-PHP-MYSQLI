
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
                <h5 class="breadcrumbs-title">Upload Data Skripsi</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Upload Judul</a></li>
                    <li class="active">Upload Judul Skripsi</li>
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
                <h4 class="header2">Form Upload Judul Skripsi</h4>
                <div class="row">
                  <form class="col s12" action="?page=proses" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="input-field col s12">
                      	<input name="id_mhs" type="hidden" value=" <?php echo $data['id_mhs'] ?> ">
                        <input name="judul" id="judul" type="text">
                        <label for="judul">Judul Skripsi</label>
                      </div>
                    </div>
                     <div class="row">
                      <div class="input-field col s12">
                      	<p>Abstrak</p>
                      	<textarea name="abstrak" id="abstrak"> Abstrak </textarea>

                       </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input name="key" id="key" type="text">
                        <label for="key"> Kata Kunci : </label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s3">
                        <select name="pemb1">
                          <option value="" selected>- Pilih Pembimbing 1 -</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[nama_dosen]'>$g[nama_dosen]</option>";
                            }
                            ?>
                        </select>
                        <label>Pembimbing 1</label>
                      </div>
                       <div class="input-field col s3">
                        <select name="pemb2">
                          <option value="" selected>- Pilih Pembimbing 2 -</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[nama_dosen]'>$g[nama_dosen]</option>";
                            }
                            ?>
                        </select>
                        <label>Pembimbing 2</label>
                      </div>
                       <div class="input-field col s3">
                        <select name="peng1">
                          <option value="" selected>- Pilih Penguji 1 -</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[nama_dosen]'>$g[nama_dosen]</option>";
                            }
                            ?>
                        </select>
                        <label>Penguji 1</label>
                      </div>
                      <div class="input-field col s3">
                        <select name="peng2">
                          <option value="" selected>- Pilih Penguji 2 -</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_dosen ORDER BY id_dosen ASC");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[nama_dosen]'>$g[nama_dosen]</option>";
                            }
                            ?>
                        </select>
                        <label>Penguji 2</label>
                      </div>
                    </div>
                    
                        <div class="row">
                      <div class="input-field col s6">
                        <input name="tgl1" id="tgl1" type="date" class="datepicker">
                        <label for="tgl1">Awal Bimbingan</label>
                      </div>
                      <div class="input-field col s6">
                        <input name="tgl2" id="tgl2" type="date" class="datepicker">
                        <label for="tgl2">Akhir Bimbingan</label>
                      </div>
                    </div>
                    
                    <div class="row">
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
                        <label>Tahun</label>
                      
                      </div> 
                         <div class="input-field col s6">
                        <select name="kategori">
                          <option value="" selected>- Pilih Kategori Judul -</option>
                            <?php
                            $sqlGuru=mysqli_query($con, "SELECT * FROM tb_kategori");
                            while($g=mysqli_fetch_array($sqlGuru)){
                            echo "<option value='$g[id_kategori]'>$g[kategori]</option>";
                            }
                            ?>
                        </select>
                        <label>Kategori Judul</label>
                      </div>

                      </div>
                      
<!-- 
                    <div class="file-field input-field col s12">
                        <input name="foto" class="file-path validate" type="file"/>
                        <div class="btn">
                          <span>Upload Foto</span>
                          <input name="foto" name="foto" type="file" />
                        </div>
                      </div> -->
                      
                    </div>
                    <div class="row">
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="S-Skripsi">Simpan
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