<?php require "function.php"; cek_login(); ?>
<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--pemanggilan file css-->
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
        <?php $user = ""; if(isset($_SESSION['user'])){ ?>
		Hallo, <?php echo $_SESSION['user']['nama_lengkap']; ?><br>
        <?php } ?>
		<a href="../index.php">Lihat website</a> | <a href="">Help</a> | <a href="logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.php?page=content">Content</a></li>
		<li><a href="index.php?page=user">User</a></li>
		<li><a href="index.php?page=categorie">Categorie</a></li>
        <li><a href="index.php?page=option">Option</a></li>
	</ul>
	</div>
	<?php 	
		if(!isset($_GET["page"])){
			require "content.php"; 
		}else{
			if($_GET['page'] == "content"){
				require "content.php";
			}else if($_GET['page'] == "user"){
				require "user.php";
			}else if($_GET['page'] == "categorie"){
				require "kategori.php";
			}else if($_GET['page'] == "write"){
				require "write.php";
			}else if($_GET['page'] == "option"){
				require "password.php";
			}else{
				echo "<div id='rightContent'><h2 style='color:red;'>Page not found !!</h2></div>";
			}
		}
	?>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="javascript:void(0)">free css template</a> | programming by rahmatstikom@yahoo.com<a href="#" target="_blank"></a><br>
	redesign and programming <a href="https://www.facebook.com/karl.solitudeman" target="_blank">Rahmat Hidayat</a>
</div>
</div>
</body>
</html>