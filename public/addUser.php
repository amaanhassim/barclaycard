<?php
session_start(); 
require '../functions/db.php';
require '../functions/loadtemplate.php';


if (isset($_POST['submit'])) {
$stmt = $pdo->prepare('INSERT INTO users (firstname, surname, email, pass, access_level)
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
    
    <div class="addUser">
    <form action="addUser.php" method="POST">
        <label>Firstname</label>
         <input name="firstname" type="text" />

        <label>Surname</label> 
        <input name="surname" type="text" />

        <label>Email</label> 
        <input name="email" type="text" />

        <label>Password</label> 
        <input name="pass" type="password" />

        <input name="submit" type="submit" value="Submit" />

    </form>
    </div>');

    require '../templates/layout.html.php';
}
?>
