<?php

require_once __DIR__ . '/Actor.php';

// I made title and release year public and initialized through the constructor, and actors and genres protected behind getters and setters just to play with different concepts, no real reasons :)

class Movie
{

    public string $title;
    public int $release_year;

    /**
     * @var Actor[]
     */
    protected array $actors = [];

    /**
     * @var string[]
     */
    protected array $genres = [];

    public function __construct(string $title, int $release_year)
    {
        $this->title = $title;
        $this->release_year = $release_year;
    }

    /**
     * @param Actor[] $actors
     */
    public function setActors(array $actors)
    {
        $this->actors = $actors;
        return $this;
    }

    /**
     * @return Actor[]
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param string[] $genres
     */
    public function setGenres(array $genres)
    {
        $this->genres = $genres;
        return $this;
    }


    /**
     * @return string[]
     */
    public function getGenres()
    {
        return $this->genres;
    }
}
