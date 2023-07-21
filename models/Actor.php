<?php

require_once __DIR__ . '/Movie.php';

class Actor
{

    protected string $first_name;
    protected string $last_name;
    protected int $age;

    public function __construct(string $first_name, string $last_name, int $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function getFullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
