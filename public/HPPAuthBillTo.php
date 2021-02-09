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
							<input type="hidden" name="transaction_uuid" value="<?php echo uniqid() ?>" >
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="locale" value="en">
						</td>
					</tr>
							
					<tr>
						<td>
							<input type="hidden" name="transaction_type" value="authorization">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="reference_number" value="<?php echo uniqid() ?>">
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
							<input type="hidden" name="currency" value="GBP">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="signed_date_time" value="<?php echo gmdate("Y-m-d\TH:i:s\Z"); ?>">
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
							<input type="text" name="access_key" value="735fdc98ef443de8bd937e1193dbf0f4">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="profile_id" value="22944931-3CC6-4410-BFCC-AF5C17865334">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="signed_field_names" value="access_key,amount,currency,locale,profile_id,reference_number,signed_date_time,signed_field_names,transaction_type,transaction_uuid,unsigned_field_names,bill_to_address_city,bill_to_address_country,bill_to_address_line1,bill_to_address_postal_code,bill_to_email,bill_to_forename,bill_to_surname">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="unsigned_field_names" value="">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="bill_to_address_city" value="Northampton">
						</td>
					</tr>
					
					<tr>		
						<td>
							<input type="hidden" name="bill_to_address_country" value="GB">
						</td>
					</tr>
					
					<tr>						
						<td>
							<input type="hidden" name="bill_to_address_line1" value="1234 Pavilion Drive">
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