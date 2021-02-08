<?php

require '../functions/loadtemplate.php';
require '../functions/db.php';
session_start();

if(isset($_POST['id'])){//Start to buying process
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id=:id');

    $stmt->execute(['id'=>$_POST['id']]);

    $product = $stmt->fetch();
    
    $content = loadtemplate('../templates/buyproduct.html.php',[]);


} else {

$stmt = $pdo->prepare('SELECT * FROM products');

$stmt->execute();

$products = $stmt->fetchAll();

$templatevars = [
    'products' => $products,
    'location' => 'products.php',
    'action' => 'Buy'
];

$content = loadtemplate('../templates/listproducts.html.php',$templatevars);
}
require '../templates/layout.html.php';


?>