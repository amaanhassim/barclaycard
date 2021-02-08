<?php
session_start(); 
require '../functions/db.php';
require '../functions/loadtemplate.php';


if (isset($_POST['signup'])) {
$stmt = $pdo->prepare('INSERT INTO Users (firstname, surname, email, pass, access_level)
 VALUES (:firstname, :surname, :email, :pass, :access_level)
');
$values = [
 'firstname' => $_POST['firstname'],
 'surname' => $_POST['surname'],
 'email' => $_POST['email'],
 'pass' => $_POST['pass'],
 'access_level' => '0',
 ];
$stmt->execute($values);

}
else {

    $content = ('<hr />
    <h1>Register</h1>
    
    <div class="signup">
    <form action="#">
        <label>Firstname</label> <input type="text" />
        <label>Surname</label> <input type="text" />
        <label>Email</label> <input type="text" />
        <label>Password</label> <input type="password" />
        <input type="checkbox"> Recive emails with new products </input> 
        <input type="submit" value="Submit" />

    </form>
    </div>');

    require '../templates/layout.html.php';
}
?>
