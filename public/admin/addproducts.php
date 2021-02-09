<?php

require '../../functions/loadtemplate.php';
require '../../functions/db.php';
session_start();

if(isset($_POST['submit']))
{
    $stmt = $pdo->prepare('INSERT INTO products (productname,productprice,des,stock)
                            VALUES(:productname, :productprice, :des, :stock)');
    
    $values = [
        'productname' => $_POST['productname'],
        'productprice' => $_POST['productprice'],
        'des' => $_POST['des'],
        'stock' => $_POST['stock']
    ];
    // var_dump($values);

    $stmt->execute($values);

    header('location: success.php');
}

$content = loadtemplate('../../templates/addproducts.html.php', []);

require '../../templates/layout.html.php';

?>