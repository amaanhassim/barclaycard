<?php

require '../../functions/loadtemplate.php';
require '../../functions/db.php';
session_start();

$stmt = $pdo->prepare('SELECT * FROM products');

$stmt->execute();

$products = $stmt->fetchAll();

$templatevars = [
    'products' => $products,
    'location' => 'editproduct.php',
    'action' => 'Edit'
];

$content = loadtemplate('../../templates/listproducts.html.php',$templatevars);

require '../../templates/layout.html.php';


?>