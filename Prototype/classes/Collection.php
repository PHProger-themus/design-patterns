<?php

namespace classes;

use interfaces\Prototype;

class Collection implements Prototype
{

    public function __construct(array $values)
    {
        $values = $values[0];
        foreach ($values as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getByIndex(int|string $index): mixed
    {
        return $this->$index;
    }

    public function count(): int
    {
        return count((array)$this);
    }

}