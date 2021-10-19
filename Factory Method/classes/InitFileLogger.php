<?php

namespace classes;

use interfaces\InitializerInterface;
use interfaces\ServiceInterface;

class InitFileLogger implements InitializerInterface
{
    public function init(string $name): ServiceInterface
    {
        $filename = str_replace(' ', '_', $name) . ".txt";
        return new FileLogger($filename);
    }
}