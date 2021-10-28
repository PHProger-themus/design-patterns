<?php

namespace strategy\classes;

use strategy\interfaces\Strategy;

class EquationContext
{

    private Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function execute(int $a, int $b, int $c) : void
    {
        $this->strategy->execute($a, $b, $c);
    }

}