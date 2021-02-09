<?php

require '../../functions/loadtemplate.php';
require '../functions/db.php';
session_start();

$stmt = $pdo2->prepare('DELETE FROM products WHERE id=:id');

$values = [
    'id' => $_POST['id']
];

$stmt->execute($values);

$templatevars = [
    'message' => 'Producted Deleted'
];

$content = loadtemplate('../../templates/deleteproducts.html.php',$templatevars);


require '../../templates/layout.html.php';


?>