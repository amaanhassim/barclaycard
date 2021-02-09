<?php
require '../functions/db.php';
$services=$GLOBALS['pdo']->prepare('SELECT * FROM services');
$services->execute();
?>

<?php
require '../functions/loadtemplate.php';

$content = loadtemplate('../templates/services2.html.php',['services' => $services]);

require '../templates/layout.html.php';

?>