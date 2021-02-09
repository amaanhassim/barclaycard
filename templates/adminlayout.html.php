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
                <li><a href="addservice.php">Add Service</a></li>
                <li><a href="services.php">Edit Service</a></li>
                <li><a href="addproducts.php">Add Product</a></li>
                <li><a href="listproducts.php">Edit Product</a></li>
                <li><a href="deleproductlist.php">Delete Product</a></li>

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