<?php

// todo require actor class

// I made title and release year public and initialized through the constructor, and actors and genres protected behind getters and setters just to play with different concepts, no real reasons :)

class Movie
{

    public string $title;
    public string $release_year;

    /**
     * @var Actor[]
     */
    protected array $actors = [];

    /**
     * @var string[]
     */
    protected array $genres = [];

    public function __construct(string $title, string $release_year)
    {
        $this->$title = $title;
        $this->release_year = $release_year;
    }

    /**
     * @param Actor[] $actors
     */
    public function setActors(array $actors)
    {
        $this->actors = $actors;
    }

    /**
     * @return Actor[]
     */
    public function getActors(): array
    {
        return $this->actors;
    }

    public function setGenres(array $genres)
    {
        $this->genres = $genres;
    }

    public function getGenres(): array
    {
        return $this->genres;
    }
}
