<?php

namespace factory_method\classes;

use factory_method\interfaces\InitializerInterface;
use factory_method\interfaces\ServiceInterface;

class InitFileLogger implements InitializerInterface
{
    public function init(string $name): ServiceInterface
    {
        $filename = str_replace(' ', '_', $name) . ".txt";
        return new FileLogger($filename);
    }
}