<?php

require '../../functions/loadtemplate.php';
session_start();

if(isset($_POST['submit']))
{
    
}

$content = loadtemplate('../../templates/addproducts.html.php', []);

require '../../templates/layout.html.php';

?>