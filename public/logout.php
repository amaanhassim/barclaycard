<?php 
session_start(); 
unset ($_SESSION['access_level']);
unset ($_SESSION ['name']);

// unseting the access_level and namme of the user who  was logged in 
// logging out
?> 

<?php
echo '<h2> Thankyou for visiting</h2>';
echo '<h3>Return to<a href="#"> Log in </a>page or <a href="#"> Return Home </a> </h3>';


?>  