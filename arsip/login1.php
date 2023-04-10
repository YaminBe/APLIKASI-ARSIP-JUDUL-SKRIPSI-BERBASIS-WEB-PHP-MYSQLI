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
  <title>Login Page | E-Skripsi</title>

  <!-- Favicons-->
  <link rel="icon" href="_assets/images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="_assets/images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="_assets/images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="_assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="_assets/css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="_assets/css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="_assets/css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="_assets/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="_assets/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="_assets/images/ptik.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text"> Login E-SKRIPSI <br> <b>ADMINISTRATOR</b></p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="username">
            <label for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="" value="Login" class="btn waves-effect waves-light col s12">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href=""> Copy Right 2018</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"></p>
          </div>          
        </div>

      </form>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
  //variabel untuk menyimpan kiriman dari form
  $user = $_POST['username'];
  $pass = $_POST['password'];
  
  if($user=='' || $pass==''){
    echo "Form belum lengkap!!";
  }else{
    include "koneksi.php";
    $sqlLogin = mysqli_query($con, "SELECT * FROM admin 
            WHERE username='$user' AND password='$pass' AND aktif='Y' ");
    $jml = mysqli_num_rows($sqlLogin);
    $d=mysqli_fetch_array($sqlLogin);
    if($jml > 0){
      session_start();
      $_SESSION['login']  = true;
      $_SESSION['id']   = $d['idadmin'];
      $_SESSION['username']=$d['username'];
      
      header('location:./_admin/');
    }else{
             echo'
<div id="card-alert" class="card red">
<div class="card-content white-text">
<p><i class="mdi-alert-error"></i> MAAF : Username / Password Tidak Valid</p>
</div>
<button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
';
    }
  }
}
?>
    </div>
  </div>

  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="_assets/js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="_assets/js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="_assets/js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="_assets/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="_assets/js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="_assets/js/custom-script.js"></script>

</body>

</html>