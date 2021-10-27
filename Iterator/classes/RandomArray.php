<?php

namespace iterator\classes;

class RandomArray
{

    public function __construct(
        private array $array
    ) {}

    public function createIterator()
    {
        return new RandomArrayIterator($this->array);
    }

}