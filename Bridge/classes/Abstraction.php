<?php

namespace classes;

use interfaces\Implementation;

class Abstraction
{

    private Implementation $manager;

    public function __construct(Implementation $manager)
    {
        $this->setManager($manager);
    }

    public function setManager(Implementation $manager): void
    {
        $this->manager = $manager;
    }

    public function getData() {
        echo $this->manager->get('users', ['id', 'name']);
    }

    public function getDataWithEscaping() {
        echo "Escaping symbols after getting data using query \"" . $this->manager->get('users', ['id', 'name']) . "\"...";
    }

}