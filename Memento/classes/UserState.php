<?php

namespace memento\classes;

use \memento\interfaces\Memento;

class UserState implements Memento
{

    public function __construct(
        private string $name,
        private int $age,
        private string $bio
    ) {}

    public function getState(): array
    {
        $state = [];
        foreach ($this as $field => $value) {
            $state[$field] = $value;
        }
        return $state;
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

    public function getStateInfo() : string
    {
        return "Name: " . $this->getName() . ", age: " . $this->getAge() . ", bio: " . $this->getBio() . "<br />";
    }

}