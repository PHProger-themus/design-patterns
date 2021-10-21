<?php

namespace interfaces;

interface Prototype
{

    public function getByIndex(int|string $index) : mixed;

    public function count() : int;

}