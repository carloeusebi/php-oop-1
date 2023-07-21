<?php

require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/Movie.php';

/**
 * @var Movie[]
 */
$movies = require __DIR__ . '/db/db.php'; // this way it's clear where $movies come from

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop1</title>
    <link rel="stylesheet" href="resources/css/styles.css">
</head>

<body>
    <header>
        <h1>Movies</h1>
    </header>

    <main>
        <?php include __DIR__ . '/resources/partials/movies-list.php'; ?>
    </main>
</body>

</html>