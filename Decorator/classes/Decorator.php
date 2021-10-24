<?php

namespace classes;

use interfaces\PasswordInterface;

class Decorator implements PasswordInterface
{

    public function __construct(
        protected PasswordInterface $instance
    ){}

    public function execute(): string
    {
        return $this->instance->execute();
    }

}