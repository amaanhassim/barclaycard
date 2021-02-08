<?php 
session_start(); 
require '../functions/db.php';
require '../functions/loadtemplate.php';


if (isset ( $_POST ['submit'])) {
$stm = $pdo -> prepare ('SELECT * FROM users WHERE email = :email AND pass = :pass');
$values = [
'email' => $_POST['email'],
'pass' => $_POST['pass'],
];
$stm -> execute($values);

$check_log = $stm -> fetch();
// loging in the user and using the session variable to get theyr access_level type and username 
// which will restrict theyr permission while logged in on the page ( access_level 1 = admin, 0 = user)
if ( $stm -> rowCount() > 0 ) {
	$_SESSION['access_level'] = $check_log['access_level'];
	$_SESSION ['name'] = $check_log['firstname'];
	// if the details entered match the ones in the database take the user to the index page / home page
	header('Location:https://barclaycard.v.je/userAppointment.php');
	} else {
	     // if the details dont match display this
		 echo '<h2> Your Details are incorrect! </h2>';
		 echo '<h2> Try Again <a href = "login.php">Log In </a> </h2>';
	} 
	
} else {
?>


<h2>Log in</h1>
	<form action="login.php" method="POST">
		<label>Email </label> <input type="text" name="email" />
		<label>Password </label> <input type="password" name="pass"/>

		<input type="submit" name="submit" value="Log in"/>
	</form>


<?php
}