<!DOCTYPE html>
<html>
	<head>
		<title>Shear-Locks Combs</title>
		 <meta charset="UTF-8" />
		<link rel="stylesheet" href="/ibuy.css" />
	</head>

	<body>
		<header>
			<h1><img class="sherlock" src="/logosherlock2.png" alt=""></h1>

			<form action="#">
				<input type="text" name="search" placeholder="Search for anything" />
				<input type="submit" name="submit" value="Search" />
			</form>
		</header>

		<nav>
			<ul>
                <li><a href="services.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="services.php">Services</a></li>
				<?php 
				if(isset($_SESSION['access_level'])){
				 echo '<li><a href="/logout.php">Logout</a></li>';
				} else {
					echo '<li><a href="/login.php">Login</a></li>';
				}?>
				<!-- <li><a href="#">Home &amp; Garden</a></li>
				<li><a href="#">Electronics</a></li>
				<li><a href="#">Fashion</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">Health</a></li>
				<li><a href="#">Toys</a></li>
				<li><a href="#">Motors</a></li>
				<li><a href="#">More</a></li> -->
			</ul>
		</nav>
		<img src="/images/banners/1.jpg" alt="Banner" />

		<main>


            <?=$content?>

        


			<footer>
				&copy; Shear-Locks Combs 2021
			</footer>
		</main>
	</body>
</html>