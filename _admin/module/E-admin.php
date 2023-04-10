
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
                <h5 class="breadcrumbs-title">Pengaturan Admin</h5>
                <ol class="breadcrumbs">
                    <li><a href="">Setting User</a></li>
                    <li class="active">Edit Admin</li>
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
                <h4 class="header2">Form Edit Data Admin</h4>
                <div class="row">
                  <?php 
                  $id = $_GET['id'];
                  $sql = mysqli_query($con,"SELECT * FROM admin WHERE idadmin='$id'");
                  $d = mysqli_fetch_array($sql);

                   ?>
                  <form class="col s12" action="?page=proses" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="input-field col s12">
                        <input name="nama" id="Nama Lengkap" type="text" value=" <?php echo $d['namalengkap']; ?>">
                        <input name="id" value=" <?php echo $d['idadmin']; ?>" type="hidden">
                        <label for="Nama Lengkap">Nama Lengkap</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <input name="user" id="Username" type="text" value=" <?php echo $d['username']; ?>">
                        <label for="Username">Username</label>
                      </div>
                      <div class="input-field col s6">
                        <input name="pass" id="Password" type="text" value=" <?php echo $d['password']; ?>">
                        <label for="Password">Password</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s6">
                        <select name="status">
                          <option value="" disabled selected> <?php echo $d['aktif']; ?></option>
                          <option value="Y">Aktif</option>
                          <option value="N">Tidak</option>
                        </select>
                        <label>Status</label>
                      </div>                      
                    </div>
                    <div class="row">
                      <div class="row">
                        <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light" type="submit" name="E-User">Update
                            <i class="mdi-content-send right"></i>
                          </button>
                        </div>
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