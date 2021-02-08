<?php

require '../../functions/loadtemplate.php';
require '../../functions/amdbconnection.php';
session_start();

if(isset($_POST['submit']))
{
    $stmt = $pdo2->prepare('INSERT INTO products(productname,productprice,description)
                            VALUES(:productname, productprice, description)');
    
    $values = [
        'productname' => $_POST['productname'],
        'productprice' => $_POST['productprice'],
        'description' => $_POST['description']
    ];
    $stmt->execute($values);
}

$content = loadtemplate('../../templates/addproducts.html.php', []);

require '../../templates/layout.html.php';

?>