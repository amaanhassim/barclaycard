

			<h1>Products</h1>

            <?php foreach($products as $row){ ?>


<ul class="productList">
    <li>
        <img src="product.png" alt="product name">
        <article>
            <h2><?=$row['productname']?></h2>
            <p><?=$row['des']?></p>
            <p class="price">Price: £<?=$row['productprice']?></p>
            <form action="<?=$location?>" method="POST">
            <input type="hidden" name="id" value=<?=$row['id']?>>
            <input class="more" type="submit" name="select" value="Select &gt;&gt;">
            </form>
            <!-- <a href="" class="more">More &gt;&gt;</a> -->
        </article>
    </li>

<?php } ?>