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

    $content = ('
    
    <h1 style="text-align:center">Register</h1>
    						
<div class="login-container">
        <div class="wrapper animated bounceInLeft">
        
            <div class="contact">
               
                <form method="POST" action="">
                    <p>
                        <label>First Name</label>
                        <input type="text" name="firstname" required>
                    </p>
					<p>
                        <label>Surname</label>
                        <input type="text" name="surname" required>
                    </p>
					<p>
                        <label>Email</label>
						<input type="email" name="email" required>
                    </p> 
                    <p>
                        <label>Password</label>
						<input type="password" name="pass" required>
                    </p>                 						
                    <p class="full">
                        <button type="submit" name = "submit" >Submit</button>
                    </p>
                </form>
            </div>

        </div>
    </div>');

    require '../templates/layout.html.php';
}
?>
