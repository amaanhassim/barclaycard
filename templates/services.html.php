


<h1>Services</h1>
<3><a href='addservice.php'>Add a service</a>
        <?php
        foreach($services as $s){
            ?>
            <article class="product">

					<img src="/product.png" alt="product name">
					<section class="details">
						<h2><?=$s['service_name']?></h2>
						<p class="price">Price: £<?=$s['service_price']?></p>
                        <p class="description"></p><?=$s['service_desc']?></p>
					</section>
					

					</article>
        <?php
        }
    ?>

			