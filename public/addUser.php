<?php
session_start(); 
require '..functions/'
require '../functions/loadtemplate.php';



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

}
else {
    $content = loadtemplate('../templates/sampleform.html.php', []);

    require '../templates/layout.html.php';
}
?>
