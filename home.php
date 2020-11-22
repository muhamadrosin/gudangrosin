<?php
session_start();
if(!isset($_SESSION['login'])) {
	include("index.php");
}
else {
?>
<html>
<head>
	<title>Aplikasi Barang Warung Muhamad Rosin</title>
	<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>	
	<div id="layout">
		<header class="header">
			<img src="images/header.png" width="100%" height="140">
		</header>
		<div class="nav">
			<ul>
				<li class="nav-sub"><a href="home.php">Home</a></li>
				<li class="nav-sub"><a href="">Menu</a>
				<ul>

				<li><a href="home.php?page=form-input-data-sparepart">Input Barang</a></li>

				<li class="nav-sub"><a href="home.php?page=lihat-stock2">Lihat Stock</a></li>
				<li class="nav-sub"><a href="home.php?page=form-create-sj">Input Barang Masuk</a></li>
				<li class="nav-sub"><a href="home.php?page=form-create-pr">Input Barang Keluar</a></li>
				</ul>
				<li class="nav-sub"><a href="">Laporan</a>
					<ul>
						<li><a href="home.php?page=lihat-masuk">Laporan Barang Masuk</a></li>
						<li><a href="home.php?page=lihat-keluar">Laporan Barang Keluar</a></li>
					</ul>
				</li>
				<li class="nav-sub"><a href="logout.php">Log out</a></li>
			</ul>
		</div>
		<div class="sheet">
			<div class="content">
				<table border ="0" width= "100%">
				<?php
					$page = (isset($_GET['page']))? $_GET['page'] : "main";
					switch ($page) {
						case 'form-input-data-sparepart': include "form-input-data-sparepart.php"; break;break;
						case 'form-create-pr': include "form-create-pr.php"; break;
						case 'form-create-sj': include "form-create-sj.php"; break;
						case 'lihat-sj': include "lihat-sj.php"; break;
						case 'lihat-pr': include "lihat-pr.php"; break;
						case 'lihat-keluar': include "lihat-keluar.php"; break;
						case 'lihat-masuk': include "lihat-masuk.php"; break;
						case 'lihat-stock2': include "lihat-stock2.php"; break;
						case 'input-pr': include "input-pr.php"; break;
						case 'input-sj': include "input-sj.php"; break;




						case 'main' :
						default : include 'default.php';
					}
				?>
				</table>
			</div><br /><br />
		</div>	
	</div>
	<footer class="footer">
			<p>Copyright  Muhamad Rosin </p>
	</footer>
</body>
</html>
<?php
}
?>
