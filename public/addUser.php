<?php 
session_start(); 




if (isset($_POST['signup'])) {
$stmt = $pdo->prepare('INSERT INTO Users (username, email, pass, access_level)
 VALUES (:username, :email, :pass, :access_level)
');
$values = [
 'username' => $_POST['username'],
 'email' => $_POST['email'],
 'pass' => $_POST['pass'],
 'access_level' => '0',
 ];
$stmt->execute($values);
echo '<h2>Thank you for registering on our site!<h2>',
'<h3>We will post news and daily articles on our town<h3>',
'<h3>for you to enjoy reading and stay up to date!<h3>',
'<h3>You can do so by logging in to your account<h3>',
'<h3>right here! <a href="/login.php"> Log in </a></h3>';
// when signing up the user will endter theyr details as listed and the access_level will
// be automaticaly set to 0 - normal user which admins can change in the edit page
}
else {
?>



<?php }
