<?php
session_start(); 
require '../functions/db.php';

if (isset($_SESSION['access_level'])){
    if(isset($_POST['service'])){
		$service = $pdo->prepare('SELECT * FROM services WHERE id=:id');
    	$service->execute(['id'=>$_POST['service']]);
		$service=$service->fetch();
        $content = '
        <form action="checkout.php" method="post">
        <table align="center">
					<col width="180">
					<col width="180">
					
					<tr>
						<td>
							<input type="hidden" name="transaction_uuid" value="'.uniqid().'" >
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
							<input type="hidden" name="reference_number" value="'.uniqid().'">
						</td>
					</tr>
					
					<tr>
						<td>
							Price
						</td>
						<td>
							<input type="text" value="'.$service['service_price'].'" disabled>
							<input type="hidden" name="amount" value="'.$service['service_price'].'">
							<input type="hidden" name="serviceid" value="'.$service['id'].'">

						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="currency" value="GBP">
						</td>
					</tr>
					
					<tr>
						<td>
							<input type="hidden" name="signed_date_time" value="'.gmdate("Y-m-d\TH:i:s\Z").'">
						</td>
					</tr>
					
					
					<tr>
						<td>
							<input type="hidden" name="access_key" value="735fdc98ef443de8bd937e1193dbf0f4">
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
							Firstname
						</td>
						<td>
							<input type="text" name="bill_to_forename" placeholder="Name">
						</td>
					</tr>
					
					<tr>
						<td>
							Surname
						</td>
						<td>
							<input type="text" name="bill_to_surname" placeholder="Surname">
						</td>
					</tr>
					<tr>
						<td>
							Email
						</td>
						<td>
							<input type="text" name="bill_to_email" placeholder="jbloggs@testemail.co.uk">
						</td>
					</tr>
					<tr>				
						<td>
							Address
						</td>		
						<td>
							<input type="text" name="bill_to_address_line1" placeholder="1234 Pavilion Drive">
						</td>
					</tr>
					<tr>
						<td>
							City
						</td>
						<td>
							<input type="text" name="bill_to_address_city" placeholder="Northampton">
						</td>
					</tr>
					
					<tr>	
						<td>
							<input type="hidden" name="bill_to_address_country" value="GB">
						</td>
					</tr>
					
					<tr>
						<td>
							Postcode
						</td>
						<td>
							<input type="text" name="bill_to_address_postal_code" placeholder="NN4 7SG">
						</td>
					</tr>
                    
							
					<tr>
						<td align="center">
							<input type="submit" value="Pay" style="height:30; width:150">
						</td>
						
					</tr>	
				</table>
    
                    <input type="hidden" name = "name" value="'.$_POST['name'].'"/>
                    <input type="hidden" name = "location" value="'.$_POST['location'].'"/>
                    <input type="hidden" name = "timeSlot" value="'.$_POST['timeSlot'].'"/>                 </select>
                    <input type="hidden" name = "service" value="'.$_POST['service'].'">
                    
                </form>

';
   require '../templates/layout.html.php';
    }
    $query1 = $pdo->prepare('SELECT * FROM users');
    $query1->execute();

    $query2 = $pdo->prepare('SELECT location FROM locations');
    $query2->execute();

    $location = '';
    foreach ($query2 as $data1) {
        $location = $location . '<option> <a href="' . $data1['location'] . '"> '. $data1['location'] .'</a></option>';
    } //print each value from the table in the desired layout
    

    $query3 = $pdo->prepare('SELECT time FROM timeSlots WHERE avalible = "0" ');
    $query3->execute();

        $time = '';
    foreach ($query3 as $data2) {
        $time = $time . '<option> <a href="' . $data2['time'] . '"> '. $data2['time'] .'</a></option>';
    } //print each value from the table in the desired layout

    $query4 = $pdo->prepare('SELECT * FROM services');
    $query4->execute();

    $service = '';
    foreach($query4 as $data3){
        $service = $service . '<option value="'.$data3['id'].'"> <a href="' . $data3['service_name'] . '"> '. $data3['service_name'] .'</a></option>';
    }

    

$content = '
    <form action="userAppointment.php" method="post">
                    <label> Name </label> <input type="text" name = "name"/>
                    <label> location </label> <select name = "location">
                    '. $location .'
                    </select>
                    <label> Time </label> <select name = "timeSlot">
                    '. $time .'
                    </select>
                    <label> Service Required </label> <select name = "service">
                    '. $service .'</select>
                    <input type="submit" name="submit" value="Submit" style="margin-left: 0px"/>
                </form>

';
   require '../templates/layout.html.php';




}
else{
    $content = '
    <h3> Please Login or register to Book a Appointment </h3>
';
require '../templates/layout.html.php';
}
?>
