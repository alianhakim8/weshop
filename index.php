<?php 

// dengan mengetikkan include_once kita bisa mengakses semua yang ada di dalam folder helper

include_once("functions/helper.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>weshop | barang - barang elektronik</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL."css/style.css"?>">
</head>

<body>	
<div id="container">
	<div id="header">
		<a href="<?php echo BASE_URL."index.php"; ?>">
			<img src="<?php echo BASE_URL."images/logo.png"; ?>"/>
		</a>
		<div id="menu">
			<div id="user">
				<a href="<?php echo BASE_URL."index.php?page=login";?>">Login</a>
				<a href="<?php echo BASE_URL."index.php?page=register";?>">Register</a>
			</div>

		<a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>"id="button-keranjang">
		<img src="<?php echo BASE_URL."images/cart.png"; ?>"/>
		</a>
		</div>
	</div>

	<div id="content"></div>

	<div id="footer">
		<p>copyright weshope 2019</p>
	</div>
</div>
</body>
</html>