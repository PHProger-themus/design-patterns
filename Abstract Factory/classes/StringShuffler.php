<?php

namespace abstract_factory\classes;

use abstract_factory\interfaces\TypeShuffler;

class StringShuffler implements TypeShuffler
{

    private string $data;

    private function convertData(string $data) : array {
        return explode(' ', $data);
    }

    public function shuffle($data) : static
    {
        $array = $this->convertData($data);
        shuffle($array);
        $this->data = implode(' ', $array);
        return $this;
    }

    public function getInfo(): string
    {
        if (!is_null($this->data)) {
            echo $this->data;
        }
        return false;
    }

}