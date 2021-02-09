<!DOCTYPE html>
<html>
	<head>
		<title>ibuy Auctions</title>
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
                <li><a href="index.php">Product List</a></li>
                <li><a href="productpage.php">Product Page</a></li>
                <li><a href="sampleform.php">Sample Form</a></li>

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
		<img src="/images/randombanner.php" alt="Banner" />

		<main>


            <?=$content?>

        


			<footer>
				&copy; ibuy 2019
			</footer>
		</main>
	</body>
</html>