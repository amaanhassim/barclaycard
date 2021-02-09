<?php session_start(); ?>
<html>
<head>
<?php
    

	$transaction_uuid = $_POST['transaction_uuid'];
	$locale = $_POST['locale'];
	$transaction_type = $_POST['transaction_type'];
	$reference_number = $_POST['reference_number'];
	$amount = $_POST['amount'];
	$currency = $_POST['currency'];
	$signed_date_time = $_POST['signed_date_time'];	
	$access_key = $_POST['access_key'];
	$profile_id = $_POST['profile_id'];
	$signed_field_names = $_POST['signed_field_names'];
	$unsigned_field_names = $_POST['unsigned_field_names'];
	$bill_to_address_city = $_POST['bill_to_address_city'];
	$bill_to_address_country = $_POST['bill_to_address_country'];
	$bill_to_address_line1 = $_POST['bill_to_address_line1'];
	$bill_to_address_postal_code = $_POST['bill_to_address_postal_code'];
	$bill_to_email = $_POST['bill_to_email'];
	$bill_to_forename = $_POST['bill_to_forename'];
	$bill_to_surname = $_POST['bill_to_surname'];

    $productid=null;
    $serviceid=null;
    $userid=$_SESSION['userid'];
    if(isset($_POST['productid'])){
        $productid = $_POST['productid'];
    elseif(isset($_POST['serviceid'])){
        $serviceid = $_POST['serviceid'];
    }
    include('../functions/db.php')
    $stmt = $pdo->prepare('INSERT INTO transactions (uid, productid, serviceid, decision, req_transaction_uuid) VALUES (:uid, :pid, :sid, :decision, :req_uuid)');
    $values = [
        'uid'=>$userid,
        'pid'=>$productid,
        'sid'=>$serviceid,
        'decision'=>null,
        'req_uuid'=>$transaction_uuid

    ];
    $stmt->execute();

	$SECRET_KEY = "1496242a70fa4b2c8a79a7c1dcb2f3fe053b579b490c467dac2e5d722efef03079e9c9611474488fbc8132fbd7cba8cadd2b74b9786e43eeaef86aa666f40383ad1d254b4daa46fb9b3ab383c8f2fa409e39ea6b673a4285adfbdf4227ca6c9ae4e54abd108444658808e3d6b98270f9d2d11deca0c348278b77522d7f92c6ee";
	
	define ('SECRET_KEY', '1496242a70fa4b2c8a79a7c1dcb2f3fe053b579b490c467dac2e5d722efef03079e9c9611474488fbc8132fbd7cba8cadd2b74b9786e43eeaef86aa666f40383ad1d254b4daa46fb9b3ab383c8f2fa409e39ea6b673a4285adfbdf4227ca6c9ae4e54abd108444658808e3d6b98270f9d2d11deca0c348278b77522d7f92c6ee');
	
	foreach($_REQUEST as $parameter_name => $parameter_value) {
        $params[$parameter_name] = $parameter_value;
    }
	
	function sign ($params) {
		return signData(buildDataToSign($params), SECRET_KEY);
	}

	function signData($data, $secretKey) {
		return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
	}

	function buildDataToSign($params) {
        $signedFieldNames = explode(",",$params["signed_field_names"]);
        foreach ($signedFieldNames as $field) {
           $dataToSign[] = $field . "=" . $params[$field];
        }
        return commaSeparate($dataToSign);
	}

	function commaSeparate ($dataToSign) {
		return implode(",",$dataToSign);
	}
	
?>
<style>
	body{
	font="Tahoma" 
	}
</style>
</head>
<body>
	
	<h1 align="center">
		Fuse Pre Payment HPP
	</h1>
	<form method="post" action="https://testsecureacceptance.cybersource.com/pay" name="GatewayPush">
	
	<table>
		<col width="180">
		<col width="180">
		
	<?php
            foreach($params as $parameter_name => $parameter_value) {
                echo "<tr><td>" . $parameter_name . "</td><td>" . $parameter_value . "</td></tr>";
            }
        ?>
	</table>
	
	<?php
        foreach($params as $parameter_name => $parameter_value) {
            echo "<input type=\"hidden\" id=\"" . $parameter_name . "\" name=\"" . $parameter_name . "\" value=\"" . $parameter_value . "\"/>\n";
        }
        echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
		
		echo "<br><br>";
		print buildDataToSign($params);
		echo "<br><br>";
		print sign($params);
    ?>
	<br /><br />
	
	<input type="submit" id="submit" value="Pay" style="height:30; width:150">
	</form>
</body>
</html>