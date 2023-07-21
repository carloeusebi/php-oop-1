<?php

require_once __DIR__ . '/models/Actor.php';
require_once __DIR__ . '/models/Movie.php';

/**
 * @var Movie[]
 */
$movies = require __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop1</title>
</head>

<body>
    <header>
        <h1>Movies</h1>
    </header>

    <main>
        <ul class="movies-list">

            <?php foreach ($movies as $movie) :
                $actors = $movie->getActors();
                $genres = $movie->getGenres();
            ?>
                <li class="movie-list-item">
                    <div class="movie-title"><strong>Title: </strong><?= $movie->title ?></div>
                    <div class="movie-release-year"><strong>Release Year: </strong><?= $movie->release_year ?></div>
                    <div class="movie-actors"><strong>Actors: </strong></div>
                    <ul class="actors-list">
                        <!-- actors -->
                        <?php foreach ($actors as $actor) : ?>
                            <li class="actor-list-item"><?= $actor->getFullName() ?></li>
                        <?php endforeach ?>
                    </ul>
                    <div class="movie-genres"><strong>Genres: </strong></div>
                    <ul class="movies-list">
                        <!-- genres -->
                        <?php foreach ($genres as $genre) : ?>
                            <li class="genre-list-item"><?= $genre ?></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <br>
            <?php endforeach ?>

        </ul>
    </main>
</body>

</html>