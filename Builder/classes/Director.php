<?php

namespace classes;

use interfaces\Builder;

class Director
{

    private Builder $builder;

    public function __construct(Builder $builder)
    {
        $this->setBuilder($builder);
    }

    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function make(string $username, string $password, string $database, string $host = "localhost") : DB
    {
        return $this->builder->setHost($host)->setUsername($username)->setPassword($password)->setDatabase($database)->getResult();
    }

}