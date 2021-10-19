<?php

namespace interfaces;

interface InitializerInterface
{
    public function init(string $name) : ServiceInterface;
}