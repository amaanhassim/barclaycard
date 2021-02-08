


<h1>Services</h1>
<?php
if(isset($_SESSION['access_level'])){
                            if($_SESSION['access_level']==1){?>
<h3><a href='addservice.php'>Add a service</a></h3>
        <?php
                            }
        foreach($services as $s){
            ?>
            <article class="product">

					<img src="/product.png" alt="product name">
					<section class="details">
						<h2><?=$s['service_name']?></h2>
						<p class="price">Price: £<?=$s['service_price']?></p>
                        <p class="description"><?=$s['service_desc']?></p>
                        <?php
                        if(isset($_SESSION['access_level'])){
                            if($_SESSION['access_level']==1){?>
                                <button><a href='editservice.php?id=<?=$s['id']?>'>Edit</a></button>
                                <button><a href='services.php?delid=<?=$s['id']?>'>Delete</a></button>
                      <?php } 
                        } ?>
					</section>
					

					</article>
        <?php
        }
    ?>

			