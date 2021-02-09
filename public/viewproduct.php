<?php

require '../functions/loadtemplate.php';
require '../functions/db.php';
session_start();

$stmt = $pdo->prepare('SELECT * FROM products WHERE id=:id');

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