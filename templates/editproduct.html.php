<hr />
					<h1>Edit Product</h1>

					<form action="#" method="POST">

						<label for="pri">Product Name:</label> <input id="pri" type="text" name="productname" value="<?=$pro['productname']?>" />

                        <label for="pr">Price:</label> <input id="pr" type="text" name="productprice"  value="<?=$pro['productprice']?>" />

						<label for="de">Description:</label> <input id="de" type="text" name="des"  value="<?=$pro['des']?>"/>

                        <input type="hidden" name="id" value=<?=$pro['id']?> />
						<input type="submit" name="submit" value="submit" />

					</form>