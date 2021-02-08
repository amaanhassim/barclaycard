<html>
	<head>
	</head>		
	<body>
		<font face="Times New Roman">
			<h1 align="center">Payment Page</h1>
			<p></p>
			<form method="post" action="HPPAuthBillTo2.php" name=BaseForm>
				<table align="center">
					<col width="180">
					<col width="180">
					
					<tr>
						<td>
							transaction_uuid
                                                 </td>
						<td>
							<input type="text" name="transaction_uuid" value="<?php echo uniqid() ?>" >
						</td>
					</tr>
					
					<tr>
						<td>
							locale
						</td>
						<td>
							<input type="text" name="locale" value="en">
						</td>
					</tr>
							
					<tr>
						<td>
							transaction_type
						</td>
						<td>
							<input type="text" name="transaction_type" value="authorization">
						</td>
					</tr>
					
					<tr>
						<td>
							reference_number
						</td>
						<td>
							<input type="text" name="reference_number" value="<?php echo uniqid() ?>">
						</td>
					</tr>
					
					<tr>
						<td>
							amount
						</td>
						<td>
							<input type="text" name="amount" value="1.00">
						</td>
					</tr>
					
					<tr>
						<td>
							currency
						</td>
						<td>
							<input type="text" name="currency" value="GBP">
						</td>
					</tr>
					
					<tr>
						<td>
							signed_date_time
						</td>
						<td>
							<input type="text" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
						</td>
					</tr>
					
					<tr>
						<td colspan="2">
							<b>Do not change unless necessary</b>
						</td>
					</tr>
					
					<tr>
						<td>
							access_key
						</td>
						<td>
							<input type="text" name="access_key" value="*enter your access_key*">
						</td>
					</tr>
					
					<tr>
						<td>
							profile_id
						</td>
						<td>
							<input type="text" name="profile_id" value="*enter your profile ID*">
						</td>
					</tr>
					
					<tr>
						<td>
							signed_field_names
						</td>
						<td>
							<input type="text" name="signed_field_names" value="access_key,amount,currency,locale,profile_id,reference_number,signed_date_time,signed_field_names,transaction_type,transaction_uuid,unsigned_field_names,bill_to_address_city,bill_to_address_country,bill_to_address_line1,bill_to_address_postal_code,bill_to_email,bill_to_forename,bill_to_surname">
						</td>
					</tr>
					
					<tr>
						<td>
							unsigned_field_names
						</td>
						<td>
							<input type="text" name="unsigned_field_names" value="">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_address_city
						</td>
						<td>
							<input type="text" name="bill_to_address_city" value="Northampton">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_address_country
						</td>
						<td>
							<input type="text" name="bill_to_address_country" value="GB">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_address_line1
						</td>
						<td>
							<input type="text" name="bill_to_address_line1" value="1234 Pavilion Drive">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_address_postal_code
						</td>
						<td>
							<input type="text" name="bill_to_address_postal_code" value="NN4 7SG">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_email
						</td>
						<td>
							<input type="text" name="bill_to_email" value="jbloggs@testemail.co.uk">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_forename
						</td>
						<td>
							<input type="text" name="bill_to_forename" value="Test">
						</td>
					</tr>
					
					<tr>
						<td>
							bill_to_surname
						</td>
						<td>
							<input type="text" name="bill_to_surname" value="Name">
						</td>
					</tr>
							
					<tr>
						<td align="center">
							<input type="submit" value="Pay" style="height:30; width:150">
						</td>
						<td align="center">
							<input type="button" value="Reset" style="height:30; width:150" onclick="resetFunction()">
						</td>
					</tr>	
				</table>
			</form>
		</font>
	</body>
</html>