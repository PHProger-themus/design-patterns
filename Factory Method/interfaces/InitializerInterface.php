<?php

namespace factory_method\interfaces;

interface InitializerInterface
{
    public function init(string $name) : ServiceInterface;
}