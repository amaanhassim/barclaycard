<?php

require '../functions/loadtemplate.php';
require '../functions/amdbconnection.php';
session_start();

$stmt = $pdo2->prepare('SELECT * FROM products WHERE id=:id');

$values = [
    'id' => $_POST['id']
];

$stmt->execute($values);

$prod = $stmt->fetchAll()[0];

$templatevars = [
    'prod' => $prod
];

$content = loadtemplate('../templates/viewproduct.html.php', $templatevars);

require '../templates/layout.html.php';



?>