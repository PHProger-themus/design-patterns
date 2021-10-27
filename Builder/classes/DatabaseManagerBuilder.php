<?php

namespace builder\classes;

class DatabaseManagerBuilder
{

    protected DB $manager;

    public function __construct()
    {
        $this->reset();
    }

    public function setHost(string $host): static
    {
        $this->manager->host = $host;
        return $this;
    }

    public function setUsername(string $username): static
    {
        $this->manager->username = $username;
        return $this;
    }

    public function setPassword(string $password): static
    {
        $this->manager->password = $password;
        return $this;
    }

    public function setDatabase(string $database): static
    {
        $this->manager->database = $database;
        return $this;
    }

    public function getResult() : DB
    {
        return $this->manager;
    }

}