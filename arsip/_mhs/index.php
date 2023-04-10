<?php
session_start();
if(!isset($_SESSION['login'])){
  header('location:./../login2.php');
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
  <script src="../_assets/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8" async defer></script>
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
                      <li><h1 class="logo-wrapper"><a href="index.php" class="brand-logo darken-1"><img src="../_assets/images/lg.png" alt="materialize logo"></a> <span class="logo-text">SKRIPSI</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li> <?php echo date (" d F Y") ?></li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
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

$sql = mysqli_query($con,"select * from tb_mhs where id_mhs = '$sesi'") or die(mysqli_error($konek));
$data = mysqli_fetch_array($sql);
?>

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="../_assets/mhs/<?php echo $data['foto'];?> " alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                        </li>
                        <li><a href="../logout.php"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"> <?php echo $data['nama_mhs']; ?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Mahasiswa</p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="?page=dashboard" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
            <hr>
            <li class="bold"><a href="?page=upload" class="waves-effect waves-cyan"><i class="mdi-file-file-upload"></i> Upload Judul Skripsi </a>
            </li>
          
             <li class="bold"><a href="?page=jurnal" class="waves-effect waves-cyan"><i class="mdi-file-file-upload"></i> Upload File Jurnal </a>
            </li>
        <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-action-question-answer"></i> Daftar Judul Skripsi</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=v-judul"> Daftar Judul Skripsi</a>
                                </li>
                               <!--  <li><a href="?page=v-judul"> Daftar Jurnal Skripsi</a>
                                </li> -->
                            </ul>
                        </div>
                    </li>                    
                </ul>
            </li>  <!--   
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan">
                      <i class="mdi-action-settings-applications"></i> Setting User</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="?page=v-admin"> <i class="mdi-social-person-outline"></i> Admin</a>
                                </li>
                                <li><a href="?page=v-mhs"> <i class="mdi-social-people-outline"></i>Mahasiswa</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li> -->
           <!--  <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li> -->
           <!--  <li><a href="angular-ui.html"><i class="mdi-action-verified-user"></i> Angular UI  <span class="new badge"></span></a>
            </li>
            <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
            </li>
            <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
            </li>
            
            <li class="li-hover">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="sample-chart-wrapper">                            
                            <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                        </div>
                    </div>
                </div>
            </li> -->
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
          }elseif ($page=='upload') {
            include 'module/Upload-Skripsi.php';
          }elseif ($page=='jurnal') {
            include 'module/Upload-Jurnal.php';
          } //Judul
          elseif ($page=='v-judul') {
            include 'module/V-judul.php';
          }elseif ($page=='detail') {
            include 'module/V-Detail.php';
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

        <script>
        CKEDITOR.replace('abstrak',{
            // uiColor:'#40c4ff'
        }


            );
    </script>

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