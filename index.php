<?php 
include 'koneksi.php';
session_start();
if (!isset($_SESSION['nama'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.php" class="navbar-brand brand"> MAMANK RACING </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.php">Beranda</a></li>
				<li class="propClone"><a href="shop.php">Belanja</a></li>
				<li class="propClone"><a href="artikel.php">Artikel</a></li>
				<li class="propClone"><a href="galeri.php">Galeri</a></li>
				<li class="propClone"><a href="contact.php">Contact Us</a></li>
				<li class="propClone"><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						Selamat Datang Di Mamank Racing Club
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						Penuhi kebutuhan otomotifmu disini
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- STEPS =============================-->
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-question" aria-hidden="true"></i></span>
					<h3 class="numbertext" >Visi & Misi</h3>
					<p>
						Kami memiliki Visi untuk menjadi kelompok komunitas terbaik dalam Otomotif untuk berbagi 
						informasi dan menyediakan produk berkualitas. Serta Misi kami yang utama yaitu 
						mendorong pertemanan dan keselamatan dalam berkendara.
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-check-square-o" aria-hidden="true"></i></span>
					<h3 class="numbertext">About Us</h3>
					<p>
					Klub Motor "Mamank Racing" adalah sebuah komunitas yang didedikasikan untuk menghubungkan para penggemar 
					otomotif dengan dunia yang mereka cintai. Dengan pengalaman dan pengetahuan yang mendalam tentang kendaraan 
					bermotor, kami berkomitmen untuk memberikan nilai tambah kepada anggota 
					kami dan komunitas otomotif secara keseluruhan.
					</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
					<h3 class="numbertext">Produk</h3>
					<p>
						Kami juga menyediakan produk-produk otomotif seperti untuk membantu anda menambah
						kenyamanan dan keamanan anda dalam berkendara. Tentu saja produk kami memiliki harga yang sangat
						terjangkau dan berkualitas sangat baik. Untuk lebih lanjut silahkan cek di panel atas!						
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	<!-- LATEST ITEMS =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">LATEST ITEMS</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Velg AR</h3>
							<p>
								Velg dengan durabilitas yang kuat cocok untuk segala medan
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="shop.php" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/velg.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Velg AR</h1>
						</a>
						<span class="price">
						<span class="edd_price">Rp. 900.000</span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Ban Kereta MM</h3>
							<p>
								Ban yang sangat cocok digunakan di medan beraspal
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="shop.php" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/roda.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Ban Kereta MM</h1>
						</a>
						<span class="price">
						<span class="edd_price">Rp. 500.000</span>
						</span>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Knalpot Akro</h3>
							<p>
								Punya suara yang sangat garang cocok di untuk memikat perhatian
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="shop.php" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/akropo.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Knalpot Akro</h1>
						</a>
						<span class="price">
						<span class="edd_price">Rp. 30.000.000</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- BUTTON =============================-->
<div class="item content">
	<div class="container text-center">
		<a href="shop.php" class="homebrowseitems">Browse All Products
		</a>
	</div>
</div>
<br/>

<!-- TESTIMONIAL =============================-->
<div class="item content">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase">Special Thanks</span></h2>
					<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar2.png" srcset="images/ktm.jpg" >
					<p>
						Terima Kasih untuk KTM yang telah mensupport klub kami dalam distribusi barang
						dan juga penyebaran pengetahuan tentang otomotif
					</p>
					<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#3D0C11;">
<div class="container text-center">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="item" data-scrollreveal="enter top over 0.4s after 0.1s">
                    <h1 class="callactiontitle">Klien & Sponsor Kami</h1>
                </div>
                <br/>
                <div data-scrollreveal="enter bottom over 0.4s after 0.1s">
                    <div style="display: flex; justify-content: center;">
                        <div class="col-sm-4 col-md-2">
                            <img src="images/yamaha.png" height="30"/>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <img src="images/kawa.png" height="30"/>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <img src="images/ktm.jpg" height="30"/>
                        </div>
                        <div class="col-sm-4 col-md-2">
                            <img src="images/shell.png" height="30"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				Connect with Us
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				&copy; 2017 Your Website Name<br/>
				Scorilo - Free template by <a href="https://www.wowthemes.net/">WowThemesNet</a>
			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
	
</body>
</html>