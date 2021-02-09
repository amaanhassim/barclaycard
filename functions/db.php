<?php
$server= 'jamiez.co.uk';
$username = 'barclaycard';
$password = 'btVIIt4xJ6zJ0J4I';
$schema = 'barclaycard';

$pdo = new PDO('mysql:dbname='.$schema.';host='.$server,$username,$password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
