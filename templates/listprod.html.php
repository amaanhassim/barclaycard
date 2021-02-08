

			<h1>Products</h1>

            <?php foreach($products as $row){ ?>


<ul class="productList">
    <li>
        <img src="product.png" alt="product name">
        <article>
            <h2><?=$products['product name']?></h2>
            <p><?=$products['des']?></p>
            <p class="price">Price: £<?=$products['price']?></p>
            <a href="#" class="more">More &gt;&gt;</a>
        </article>
    </li>

<?php } ?>