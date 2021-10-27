<?php

namespace flyweight\classes;

class Entity
{

    public function __construct(
        private string $dynamic_param,
        private EntityType $type
    )
    {}

    public function get()
    {
        $this->type->get($this->dynamic_param);
    }

}