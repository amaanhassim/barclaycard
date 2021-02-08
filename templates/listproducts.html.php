

			<h1>Products</h1>
<?php foreach($products as $row){ ?>

<ul class="productList">
    <li>
        <img src="../product.png" alt="product image">
        <article>
            <h2><?=$row['productname']?></h2>
            <form action="<?=$location?>" method="POST">
            <input type="hidden" name="id" value=<?=$row['id']?>>
            <input class="more" type="submit" name="select" value="<?=$action?> &gt;&gt;">
            </form>
            <!-- <a href="#" class="more">Edit &gt;&gt;</a> -->
        </article>
    </li>
</ul>

<?php } ?>