<?php 
 session_start(); 
 require '../functions/db.php';
 require '../functions/loadtemplate.php';


 if (isset ( $_POST ['submit'])) {
 $stm = $pdo -> prepare ('SELECT * FROM users WHERE email = :email AND pass = :pass');
$values = [
'email' => $_POST['email'],
 'pass' => $_POST['pass']
];
 $stm -> execute($values);

 $check_log = $stm -> fetch();
// loging in the user and using the session variable to get theyr access_level type and username 
// which will restrict theyr permission while logged in on the page ( access_level 1 = admin, 0 = user)
if ( $stm -> rowCount() > 0 ) {
 	$_SESSION['access_level'] = $check_log['access_level'];
 	$_SESSION['userid'] = $check_log['idusers'];
 	$_SESSION ['name'] = $check_log['firstname'];
	//if the details entered match the ones in the database take the user to the index page / home page
	header('Location:https://barclaycard.v.je/userAppointment.php');
	} else {
	     // if the details dont match display this
		 echo '<h2> Your Details are incorrect! </h2>';
		 echo '<h2> Try Again <a href = "login.php">Log In </a> </h2>';
	} 
	
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script src="./login.js" async></script>
    <title>Sherlock Comb</title>
</head>
<body>
    
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<div class="ttl"><h1>Sherlock Comb</h1></div>
<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class"links">
        <li class="signin-active"><a class="btn">Log in</a></li>
        <a href=""></a>
        <img class="logo" src="/logosherlock2.png" alt="">
      </ul>
    </div>
     
                <form class="form-signin" action="" method="post" name="form">
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="pass" placeholder=""/>
          <input class="btn-signin btn-animate" type="submit" name="submit">
          </input>
          </form>
  </div>
	</form> 
    </body>
</html>
<?php }


