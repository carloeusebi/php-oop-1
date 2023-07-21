<?php

require_once __DIR__ . '/../models/Actor.php';
require_once __DIR__ . '/../models/Movie.php';

// movies

$dune = new Movie('Dune', 2021);
$forrest_gump = new Movie('Forrest Gump', 1994);

// actors
$timothee_chalamet = new Actor('Timothée', 'Chalamet', 27);
$oscar_isaac = new Actor('Oscar', 'Isaac', 44);
$jason_momoa = new Actor('Jason', 'Momoa', 43);

$tom_hanks = new Actor('Tom', 'Hanks', 67);
$gary_sinise = new Actor('Gary', 'Sinise', 68); //Lt. Dan 


$dune->setActors([$timothee_chalamet, $oscar_isaac, $jason_momoa])->setGenres(['adventure', 'sci-fi', 'drama']);

$forrest_gump->setActors([$tom_hanks, $gary_sinise])->setGenres(['comedy', 'drama']);

return [$dune, $forrest_gump];
