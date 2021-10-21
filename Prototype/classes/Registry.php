<?php

namespace classes;

use interfaces\Prototype;

class Registry
{

    private array $prototypes = [];

    public function addItem(string $id, string $prototype, mixed ...$data) : void {
        if(isset($this->prototypes[$id])) {
            throw new \Exception("ID already exists");
        }
        $this->prototypes[$id] = new $prototype($data);
    }

    public function getItem(string $id) : Prototype {
        if(!isset($this->prototypes[$id])) {
            throw new \Exception("ID doesn't exist");
        }
        return clone $this->prototypes[$id];
    }

}