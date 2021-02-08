<?php

require '../../functions/loadtemplate.php';
require '../../functions/amdbconnection.php';
session_start();

if(isset($_POST['submit']))
{
    $up = $pdo2->prepare('UPDATE products SET productname=:productname, productprice=:productprice, des=:des WHERE id=:id');

    $values = [
        'id' => $_POST['id'],
        'productname' => $_POST['productname'],
        'productprice' => $_POST['productprice'],
        'des' => $_POST['des']
    ];

    $up->execute($values);
}

$stmt = $pdo2->prepare('SELECT * FROM products WHERE id=:id');

$values = [
    'id' => $_POST['id']
];

$stmt->execute($values);

$pro = $stmt->fetchAll()[0];

$templatevars=[
    'pro' => $pro
];

$content = loadtemplate('../../templates/editproduct.html.php',$templatevars);

require '../../templates/layout.html.php';


?>