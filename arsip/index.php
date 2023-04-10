<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
include 'koneksi.php';
 ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Arsip Skripsi PTIK</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grounding Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Custom Theme files -->
	<link href="_assets/web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-css -->
	<link href="_assets/web/css/banner.css" rel="stylesheet" type="text/css" media="all" />
	<!--// banner-css -->
	<link rel="stylesheet" href="_assets/web/css/shop.css" type="text/css" media="screen" property="" />
	<!--// shop-css -->
	<link href="_assets/web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //common-css -->
	<link href="_assets/web/css/blog.css" type="text/css" rel="stylesheet" media="all">
	<!-- //creative blog css -->
	<link href="_assets/web/css/font-awesome.css" rel="stylesheet">
	<!-- // Font-awesome-css -->
	<!-- //Custom Theme files -->
	<!-- Web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-fonts -->

</head>

<body>
	<!-- header -->
	<div class="header-w3layouts" id="home">
		<!-- header-top -->
		<div class="header_topw3layouts_bar">
			<div class="container">
				<div class="header_agileits_left">
					<ul>
						<li>
							<i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
						<li>
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<a href="mailto:info@example.com">info@example.com</a>
						</li>
					</ul>
				</div>
				<div class="header_right">

					<!-- <a href="#" class="log" data-toggle="modal" data-target="#myModal">Login</a> -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!--// header-top -->
		<!-- header-middle -->
		<!-- <div class="header-middle">
			<div class="container">
				<div class="logof-w3-agile">
					<h1>
						<a href=""> <img src="_assets/images/logo.jpg" height="60"> E-SKRIPSI</a>
					</h1>
				</div>
				<div class="searchf-w3-agileits-headr">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default search" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div> -->
			<!-- 	<div class="cart-mainf">
						<img src="_assets/images/logo.jpg" height="80">
					

				</div> -->
				<div class="clearfix"></div>
			</div>
		</div>
		<!--// header-middle -->
		<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse js-navbar-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="?page=home"> <span class="fa fa-home"></span> Home</a>
					</li>

				<!-- 
					<li class="dropdown mega-dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="fa fa-search"></span> Pencarian
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu mega-dropdown-menu">
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
					
                    <li class="dropdown-header">Berdasrkan Tahun</li>
									<li>
									
										_________________________
												<?php
											$tampil=mysqli_query($con,"SELECT * FROM tb_skripsi
												INNER JOIN tb_kategori ON tb_skripsi.id_kategori=tb_kategori.id_kategori GROUP BY tb_skripsi.tahun
												");
											while($data=mysqli_fetch_array($tampil)){
											?>
				                        <li>
											<a href="?page=kategori&id=<?php echo $data['id_kategori']; ?>"><b><?php echo $data['tahun'] ?></b> | <code><?php echo $data['kategori'] ;?></code></a>
											
										</li>
										<?php } ?>	

									</li>									
								</ul>
							</li>
							<li class="col-md-3 col-sm-4 col-xs-6">
								<ul>
									<li class="dropdown-header">Berdasarkan Kategori</li>	
									_________________________
											<?php
											$tampil=mysqli_query($con,"SELECT * FROM tb_kategori");
											while($data3=mysqli_fetch_array($tampil)){
											?>
				                        <li>
											<a href="?page=kategori&id=<?php echo $data3['id_kategori']; ?>"><?php echo $data3['kategori'] ?></a>
											_________________________
										</li>
										<?php } ?>																	
									
								</ul>
							</li>
						</ul>
					</li> -->
					
					<!-- <li class="dropdown mega-dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu mega-dropdown-menu">
							<li class="col-md-6 col-sm-6 col-xs-6">
								<h2>Administrator Login</h2>
								<hr>
								<a href="login1.php" class="btn btn-primary">Visit Login</a>
							
							</li>
							<li class="col-md-6 col-sm-6 col-xs-6">
								<h2>Mahasiswa Login</h2>
								<hr>
								  b hhv
							
							</li>													
						</ul>
					</li> -->
					
					<!-- <li>
						<a href=""> <span class="fa fa-maps"></span> Maps</a>
					</li> -->
					<li>
						<a href="?page=bykategori"><span class="fa fa-search"></span> Cari By Category</a>
					</li>
					<li>
						<a href="?page=byyear"><span class="fa fa-search"></span> Cari By Year</a>
					</li>
					<li>
						<a href="?page=create"><span class="fa  fa-check-square-o"></span> Create Acount</a>
					</li>
				</ul>
			</div>
			<!-- //nav-collapse -->
		</nav>
	</div>
	<!-- banner -->
	<div class="demo-bg">
		<div class="container">
			<h3 class="demo-title">Sistem informasi
				<span>Arsip Judul Skripsi</span>
			</h3>
			<p class="demo-ibg-txt"><b style="color: #fff;">PTIK</b></p>

		</div>
	</div>
	<!--//banner -->
	<!-- breadcrumbs -->
	<div class="demo-header" style="background-color: #212121;">
		<div class="container-fluid" style="background-color:#212121;">
			<ul class="inner_breadcrumb" style="background-color:#212121;">
				<!-- <li>
					<a href="">Home</a>
					<span>| |</span>
				</li> -->
				<li class="active">
					<!-- <marquee><b>Selamat Datang</b> di [Sistem Informasi Kearsipan Judul Skripsi]</marquee> -->
			<form class="form-inline" action="?page=cari" method="post">
			<div class="form-group">
			<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
			<div class="input-group">
			<!-- <div class="input-group-addon">Pencarian</div> -->
			    <input type="text" name="keyword" class="form-control" id="exampleInputAmount" placeholder=" Pencarian Berdasarkan Judul Skripsi..." style="width: 500px;border:2px solid #40c4ff;">
			</div>
			</div>
			<button type="submit" name="cari" class="btn btn-info"><span class="fa fa-search"></span>Cari</button>
			</form>
				</li>
				<li class="pull-right">
					<a href="login2.php" class="btn btn-info"><span class="fa fa-user"></span>Login Mahasiswa</a>
					<a href="login1.php" class="btn btn-info"><span class="fa fa-user"></span>Login Admin</a>
				</li>
			</ul>

		</div>
	</div>
	<!-- //breadcrumbs -->
	<!-- blog -->
	<div class="blog main-pos demo-sec" id="blog">
		<!-- <h3 class="pos-title text-center">latest
			<span>blog</span> posts</h3> -->
		<div class="container">
			<div class="blog-sub">
				<?php 
				error_reporting();
				$page = @$_GET['page'];
				if ($page=='home') {
					include 'page/home.php';
				}elseif ($page=='create') {
					include 'page/Register.php';
				}elseif ($page=='proses') {
					include 'page/proses.php';
				}elseif ($page=='cari') {
					include 'page/cari.php';
				}elseif ($page=='detail') {
					include 'page/v-detail.php';
				}elseif ($page=='kategori') {
					include 'page/kategori.php';
				}elseif ($page=='bykategori') {
					include 'page/cari-kategori.php';
				}elseif ($page=='byyear') {
					include 'page/cari-tahun.php';
				}elseif ($page=='tahun') {
					include 'page/tahun.php';
				}elseif ($page=='') {
					include 'page/home.php';
				}else{
					echo "<h3>Sorry !! (Halaman Tidak Ditemukan)</h3>";
				}



				 ?>

			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- footer -->

	<div class="footer-wthree-copyf">
		<div class="container">
			<div class="addressf-agileits-w3layouts">
				<p>
					<span class="fa fa-map-marker" aria-hidden="true"></span>Institut Agama Islam Negeri. Bukittinggi</p>
			</div>
			<p>© 2018 E-Skripsi. PTIK | Design by
				<a href="">Adnil Rahmat</a>
			</p>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //footer -->

	<!-- Common js -->
	<script src="_assets/web/js/jquery-2.1.4.min.js"></script>
	<!--// Common js -->

	<!-- cart-js -->
	<script src="_assets/web/js/minicart.js"></script>
	<script>
		edu.render();

		edu.cart.on('edu_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- reviews -->
	<script>
		function blinker() {
			$('.blinking').fadeOut(500);
			$('.blinking').fadeIn(500);
		}
		setInterval(blinker, 1000);
	</script>
	<script>
		function cycle($item, $cycler) {
			setTimeout(cycle, 2000, $item.next(), $cycler);

			$item.slideUp(1000, function () {
				$item.appendTo($cycler).show();
			});
		}
		cycle($('#cycler div:first'), $('#cycler'));
	</script>
	<!--// reviews -->

	<!-- responsive-tabs -->
	<script src="_assets/web/js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- //responsive-tabs -->

	<!-- Carousel Auto-Cycle -->
	<script>
		$(document).ready(function () {
			$('.carousel').carousel({
				interval: 6000
			})
		});
	</script>
	<!-- // Carousel Auto-Cycle -->

	<!-- Nav Js -->
	<script src="_assets/web/js/bootstrap.js"></script>
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!--// Nav Js -->

	<!-- bootstrap-pop-up -->
	<!-- <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<section>
					<div class="modal-body">
						<div class="loginf_module">
							<div class="module form-module">
								<div class="toggle">
									<i class="fa fa-times fa-pencil"></i>
									<div class="tooltip">Click Me</div>
								</div>
								<div class="form">
									<h3>Login to your account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="submit" value="Login">
									</form>
									<div class="cta">
										<a href="#">Forgot your password?</a>
									</div>
								</div>
								<div class="form">
									<h3>Create an account</h3>
									<form action="#" method="post">
										<input type="text" name="Username" placeholder="Username" required="">
										<input type="password" name="Password" placeholder="Password" required="">
										<input type="email" name="Email" placeholder="Email address" required="">
										<input type="text" name="Phone" placeholder="Phone Number" required="">
										<input type="submit" value="Register">
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div> -->
	<script>
		$('.toggle').click(function () {
			// Switches the Icon
			$(this).children('i').toggleClass('fa-pencil');
			// Switches the forms  
			$('.form').animate({
				height: "toggle",
				'padding-top': 'toggle',
				'padding-bottom': 'toggle',
				opacity: "toggle"
			}, "slow");
		});
	</script>
	<!-- //bootstrap-pop-up -->

	<!--pop-up-box -->
	<script src="_assets/web/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box -->
	<!-- start-smoth-scrolling -->
	<script src="_assets/web/js/move-top.js"></script>
	<script src="_assets/web/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smoothscroll -->
	<script src="_assets/web/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->



</body>

</html>