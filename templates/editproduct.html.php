<h1 style="text-align:center;">Edit Product</h1>
						
						<div class="login-container">
								<div class="wrapper animated bounceInLeft">
									<div class="company-info">
										<h3>Sherlock Comb</h3>
										<ul>
											<li><i class="fa fa-road"></i>44 Something St</li>
											<li><i class="fa fa-phone"></i>555-555-5555</li>
											<li><i class="fa fa-envelope"></i>sherlock@test.com</li>
										</ul>
									</div>
									<div class="contact">
									   


					<form action="addproducts.php" method="POST">

						<label>Product Name:</label><br> <input  type="text" name="productname"  value="<?=$pro['productprice']?>"/>

                        <label">Price:</label> <input  type="text" name="productprice" value="<?=$pro['productprice']?>" />

						<label>Description:</label> 
						<textarea name="des" id="" cols="30" rows="10"  value="<?=$pro['ds'];?>" </textarea>

						<!-- UNDEFINED INDEX-id -->
						<!-- <input type="hidden" name="id" value="<?=$pro['id']?>"/> -->

						<p class="full">
                        <button type="submit" name = "submit" >Submit</button>
                    </p>
					</form>
									</div>
								</div>
						</div>

