<?php
require '../../functions/db.php';
$service = $GLOBALS['pdo']->prepare('SELECT * FROM services WHERE id=:id');
$values = [
    'id' => $_GET['id']
];
$service->execute($values);
$service=$service->fetch();


?>

<?php
require '../../functions/loadtemplate.php';

$content = loadtemplate('../../templates/editservice.html.php',['service' => $service]);

require '../../templates/layout.html.php';