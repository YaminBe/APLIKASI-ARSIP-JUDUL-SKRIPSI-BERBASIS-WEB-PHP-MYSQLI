<?php
session_start();
if(!isset($_SESSION['login'])){
  header('location:./../login1.php');
}

include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>Administrator E-Skripsi</title>

  <!-- Favicons-->
  <link rel="icon" href="../_assets/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="../_assets/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="../_assets/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  <link href="../_assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../_assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="../_assets/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../_assets/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../_assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../_assets/js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../_assets/js/plugins/chartist-../_assets/js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">
   <!--dropify-->
  <link href="../_assets/js/plugins/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
  <!-- Start Page Loading -->
 <!-- <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>  -->
  <!-- End Page Loading -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="" class="brand-logo darken-1"><img src="../_assets/images/lg.png" alt="E - SKRIPSI"> </a> <!-- <span class="logo-text">Materialize</span> --></h1></li>
                    </ul>
                    <!-- <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2"/>
                    </div> -->
                    <ul class="right hide-on-med-and-down">
                       <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>  
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                                             
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>Info Terbaru <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                        <?php
                    $tampil=mysqli_query($con,"SELECT * FROM tb_skripsi
                      INNER JOIN tb_mhs ON tb_skripsi.id_mhs=tb_mhs.id_mhs

                     ORDER BY tb_skripsi.id_skripsi DESC LIMIT 5");
                    while($data2=mysqli_fetch_array($tampil)){
                    ?>
                      <li>
                        <a href="?page=detail&id=<?php echo $data2['id_skripsi'];?> "><i class="mdi-action-face-unlock"></i> <?php echo $data2['nama_mhs'] ?></a>
                        <time class="media-meta"> Telah Mengupload Data Skripsi <br>----------------------------------------------------------------------------------------------------</time>
                      </li>
                    <?php
                     } ?>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
<?php
if (@$_SESSION['login']) {
$sesi = @$_SESSION['id'];
}

$sql = mysqli_query($con,"select * from admin where idadmin = '$sesi'") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);
?>

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="../_assets/user/<?php echo $data['foto'];?> " alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                     
                        <li><a href="../logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"> <?php echo $data['namalengkap']; ?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="?page=dashboard" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <hr>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-av-my-library-books"></i> Data Master</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=v-jur"><i class="mdi-image-filter-none"></i> Data Jurusan</a></li>
                                <li><a href="?page=v-fak"><i class="mdi-image-filter-none"></i> Data Fakultas</a></li>
                                <li><a href="?page=v-kat"><i class="mdi-image-filter-none"></i> Data Kategori</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-social-people-outline"></i> Mahasiswa</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=t-mhs"> <i class="mdi-social-group-add"></i> Add New</a>
                                </li>
                                <li><a href="?page=v-mhs"> <i class="mdi-social-people-outline"></i> Data Mhs</a>
                                </li>
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-social-people"></i> Dosen</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=t-dsn">Tambah Dosen</a>
                                </li>
                                <li><a href="?page=v-dsn">Lihat Dosen</a>
                                </li>
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-file-file-upload"></i> Upload File</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=fileskripsi"> Upload File Skripsi</a>
                                </li>
                                <li><a href="?page=jurnal"> Upload File Jurnal</a>
                                </li>
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-action-receipt"></i> Lihat Data</a>
                        <div class="collapsible-body">
                            <ul>                                
                                <li><a href="?page=v-judul"><i class="mdi-image-filter-none"></i> Data Skripsi</a>
                                </li>
                                <li><a href="?page=v-jurnal"> <i class="mdi-image-filter-none"></i> Data Jurnal</a>
                                </li>
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>
             <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-editor-insert-chart"></i> Grafik Data Skripsi</a>
                        <div class="collapsible-body">
                            <ul>                                
                                <li><a href="?page=v-grafik">Grafik Kategori Skripsi</a>
                                </li>
                                <li><a href="?page=v-tahun"> Grafik Tahun Skripsi</a>
                                </li>
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-content-content-copy"></i> Laporan</a>
                        <div class="collapsible-body">
                            <ul>                                
                                <li><a href="?page=lap-skripsi"> <i class="mdi-content-content-copy"></i>Laporan Skripsi</a>
                                </li>
                                <li><a href="?page=lap-jurnal"> <i class="mdi-content-content-copy"></i> Laporan Jurnal</a>
                                </li>
                                 <li><a href="?page=lap-dosen"> <i class="mdi-content-content-copy"></i>Laporan Dosen</a>
                                </li>
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>
            <!-- <hr> -->
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-action-settings-applications"></i> Setting User</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=v-admin"> <i class="mdi-social-person-outline"></i> Admin</a>
                                </li>
                                <li><a href="?page=v-umhs"> <i class="mdi-social-people-outline"></i>Mahasiswa</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <hr>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">
        <!-- Page Content -->
          <?php 
          error_reporting();
          $page= @$_GET['page'];
          if ($page=='dashboard') {
            include 'module/dashboard.php';
          }elseif ($page=='proses') {
             include 'module/proses.php';
             // admin
          }elseif ($page=='v-admin') {
             include 'module/V-admin.php';
          }elseif ($page=='e-admin') {
            include 'module/E-admin.php';
          }elseif ($page=='t-admin') {
            include 'module/T-admin.php';
          }elseif ($page=='d-admin') {
            include 'module/D-admin.php';
         
          }elseif ($page=='v-umhs') {
            include 'module/V-usermhs.php';
               // Mhs
          }elseif ($page=='v-mhs') {
            include 'module/V-mhs.php';
          }elseif ($page=='t-mhs') {
            include 'module/T-mhs.php';
          }elseif ($page=='e-mhs') {
            include 'module/E-mhs.php';
          }elseif ($page=='d-mhs') {
            include 'module/D-mhs.php';
            // Dosen
          }elseif ($page=='v-dsn') {
            include 'module/V-dsn.php';
          }elseif ($page=='t-dsn') {
            include 'module/T-dsn.php';            
          }elseif ($page=='e-dsn') {
            include 'module/E-dsn.php';            
          }elseif ($page=='dsn-detail') {
            include 'module/detail-dsn.php';
          }elseif ($page=='d-dsn') {
            include 'module/D-dsn.php';
            //Judul
          }elseif ($page=='v-judul') {
            include 'module/V-judul.php';
          }elseif ($page=='detail') {
            include 'module/V-Detail.php';
          }elseif ($page=='d-judul') {
            include 'module/D-judul.php';
            // Jurusan
          }elseif ($page=='v-jur') {
            include 'module/V-jurusan.php';
          }elseif ($page=='t-jur') {
            include 'module/T-jurusan.php';
          }elseif ($page=='e-jur') {
            include 'module/E-jurusan.php';
          }elseif ($page=='d-jur') {
            include 'module/D-jurusan.php';
            //Fakultas
          }elseif ($page=='v-fak') {
            include 'module/V-fakultas.php';
          }elseif ($page=='t-fak') {
            include 'module/T-fakultas.php';
          }elseif ($page=='e-fak') {
            include 'module/E-fakultas.php';
          }elseif ($page=='d-fak') {
            include 'module/D-fakultas.php';
            // Kategori
          }elseif ($page=='v-kat') {
            include 'module/V-kategori.php';
          }elseif ($page=='t-kat') {
            include 'module/T-kategori.php';
          }elseif ($page=='e-kat') {
            include 'module/E-kategori.php';
          }elseif ($page=='d-kat') {
            include 'module/D-kategori.php';
            // Jurnal
          }elseif ($page=='jurnal') {
            include 'module/Upload-Jurnal.php';
          }elseif ($page=='v-jurnal') {
            include 'module/V-jurnal.php';
          }elseif ($page=='d-jurnal') {
            include 'module/D-jurnal.php';
          }elseif ($page=='v-jurnaldetail') {
            include 'module/V-DetailJurnal.php';
            // Upload File Skripsi
          }elseif ($page=='fileskripsi') {
            include 'module/Upload-Skripsi.php';
            // Grafik
          }elseif ($page=='v-grafik') {
            include 'module/Grafik.php';
          }elseif ($page=='v-tahun') {
            include 'module/GrafikTahun.php';
            // Laporan
          }elseif ($page=='lap-skripsi') {
            include 'module/lap_skripsi.php';
          }elseif ($page=='lap-jurnal') {
            include 'module/lap_jurnal.php';
          }elseif ($page=='lap-dosen') {
            include 'module/lap_dosen.php';
          }elseif ($page=='') {
            include 'module/dashboard.php';
          }else{
            include 'module/404.php';
          }

           ?>
        <!-- End Content -->



      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->
  <footer class="page-footer">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright © 2018 <a class="grey-text text-lighten-4" href="" target="_blank">Arsip Judul Skripsi</a> PTIK</span>
        <span class="right">Developed by <a class="grey-text text-lighten-4" href="">Adnil Rahmat</a></span>
        </div>
    </div>
  </footer>
  <!-- END FOOTER -->



    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="../_assets/js/plugins/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="../_assets/js/materialize.min.js"></script>
   
    <script type="text/javascript" src="../_assets/js/prism/prism.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="../_assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <!-- data-tables -->
    <script type="text/javascript" src="../_assets/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../_assets/js/plugins/data-tables/data-tables-script.js"></script>
    <!-- chartist -->
    <script type="text/javascript" src="../_assets/js/plugins/chartist-../_assets/js/chartist.min.js"></script>
     <!-- dropify -->
    <script type="text/javascript" src="../_assets/js/plugins/dropify/js/dropify.min.js"></script>   
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="../_assets/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../_assets/js/custom-script.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('.dropify-event').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.filename + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });
        });
    </script>
    
</body>

</html>