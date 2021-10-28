<?php

namespace strategy\interfaces;

interface Strategy
{

    public function execute(int $a, int $b, int $c): void;

}