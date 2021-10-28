<?php

namespace memento\classes;

use memento\interfaces\Memento;

class User
{

    public function __construct(
        private string $name,
        private int $age,
        private string $bio
    ) {}

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(string $age)
    {
        $this->age = $age;
    }

    public function setBio(string $bio)
    {
        $this->bio = $bio;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getAge() : int
    {
        return $this->age;
    }

    public function getBio() : string
    {
        return $this->bio;
    }

    public function getUserInfo() : string
    {
        return "Name: " . $this->getName() . ", age: " . $this->getAge() . ", bio: " . $this->getBio() . "<br />";
    }

    public function save() : Memento
    {
        return new UserState($this->name, $this->age, $this->bio);
    }

    public function restore(Memento $memento)
    {
        foreach ($memento->getState() as $field => $value) {
            $this->$field = $value;
        }
    }

}