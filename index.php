<?php

require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/Movie.php';
$movies = require __DIR__ . '/db/db.php';

echo '<pre>';
var_dump($movies);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop1</title>
</head>

<body>
</body>

</html>