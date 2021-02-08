<?php

require '../functions/loadtemplate.php';
require '../functions/amdbconnection.php';
session_start();

$stmt = $pdo2->prepare('SELECT * FROM products');

$stmt->execute();

$products = $stmt->fetchAll();

$templatevars = [
    'products' => $products,
    'location' => 'viewproduct.php'
];

$content = loadtemplate('../templates/listprod.html.php',$templatevars);

require '../templates/layout.html.php';

?>