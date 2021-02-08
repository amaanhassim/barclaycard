<?php

require '../../functions/loadtemplate.php';
require '../../functions/amdbconnection.php';
session_start();

if(isset($_POST['submit']))
{
    $stmt = $pdo2->prepare('INSERT INTO products (productname,productprice,des)
                            VALUES(:productname, :productprice, :des)');
    
    $values = [
        'productname' => $_POST['productname'],
        'productprice' => $_POST['productprice'],
        'des' => $_POST['des']
    ];
    var_dump($values);

    $stmt->execute($values);
}

$content = loadtemplate('../../templates/addproducts.html.php', []);

require '../../templates/layout.html.php';

?>