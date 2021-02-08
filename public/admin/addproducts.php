<?php

require '../functions/loadtemplate.php';
session_start();

$content = loadtemplate('../templates/addproducts.html.php', []);

require '../templates/layout.html.php';

?>