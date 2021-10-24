<?php

namespace classes;

class EntityType
{

    public function __construct(
        private int $static_param1,
        private string $static_param2
    )
    {}

    public function get(string $dynamic_param)
    {
        echo "{$this->static_param2} #{$this->static_param1}: $dynamic_param <br />";
    }

}