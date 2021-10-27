<?php

namespace factory_method\interfaces;

interface ServiceInterface
{
    public function log(string $message): void;
}