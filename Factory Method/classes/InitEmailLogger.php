<?php

namespace factory_method\classes;

use factory_method\interfaces\InitializerInterface;
use factory_method\interfaces\ServiceInterface;

class InitEmailLogger implements InitializerInterface
{
    public function init(string $name): ServiceInterface
    {
        return new EmailLogger($name);
    }
}