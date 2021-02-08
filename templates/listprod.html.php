

			<h1>Products</h1>

            <?php foreach($products as $row){ ?>


<ul class="productList">
    <li>
        <img src="product.png" alt="product name">
        <article>
            <h2><?=$row['productname']?></h2>
            <p><?=$row['des']?></p>
            <p class="price">Price: £<?=$row['productprice']?></p>
            <a href="#" class="more">More &gt;&gt;</a>
        </article>
    </li>

<?php } ?>