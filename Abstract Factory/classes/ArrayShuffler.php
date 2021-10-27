<?php

namespace abstract_factory\classes;

use abstract_factory\interfaces\TypeShuffler;

class ArrayShuffler implements TypeShuffler
{

    private array $data;

    public function shuffle($data) : static
    {
        array_walk($data, function(&$value, $key) {
            $value = "$key: $value";
        });
        shuffle($data);
        $this->data = $data;
        return $this;
    }

    public function getInfo(): string
    {
        if (!is_null($this->data)) {
            print_r($this->data);
        }
        return false;
    }

}