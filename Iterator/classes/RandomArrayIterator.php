<?php

namespace iterator\classes;

use composite\classes\TaskGroup;

class RandomArrayIterator implements \Iterator
{

    public function __construct(
        private array $array,
        private int $position = 0,
        private array $keys = []
    ) {
        $this->shuffleKeys();
    }

    private function shuffleKeys()
    {
        $keys = [];
        foreach ($this->array as $key => $item) {
            $keys[] = $key;
        }
        shuffle($keys);
        $this->keys = $keys;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return isset($this->keys[$this->position]);
    }

    public function next()
    {
        ++$this->position;
    }

    public function current()
    {
        return $this->array[$this->keys[$this->position]];
    }

    public function key()
    {
        return $this->keys[$this->position];
    }

}