<?php

namespace classes;

use interfaces\InitializerInterface;
use interfaces\ServiceInterface;

class InitEmailLogger implements InitializerInterface
{
    public function init(string $name): ServiceInterface
    {
        return new EmailLogger($name);
    }
}