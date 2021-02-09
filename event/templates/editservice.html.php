<hr />
					<h1>Edit <?=$service['service_name']?></h1>

					<form action="services.php?edit=<?=$service['id']?>" method="post">
						<label>Service Name</label> <input type="text" name="service_name" value="<?=$service['service_name']?>"/>
						<label>Description</label> <input type="text" name="service_desc" value="<?=$service['service_desc']?>" />
						<label>Price (£)</label> <input type="text" name="service_price" value="<?=$service['service_price']?>"/>
						<input type="submit" value="Submit" />

					</form>