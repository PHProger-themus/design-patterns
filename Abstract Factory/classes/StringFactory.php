<?php

namespace abstract_factory\classes;

use abstract_factory\interfaces\Factory;
use abstract_factory\interfaces\TypeAnalyzer;
use abstract_factory\interfaces\TypeShuffler;

class StringFactory implements Factory
{

    public function getAnalyzer(): TypeAnalyzer
    {
        return new StringAnalyzer();
    }

    public function getShuffler(): TypeShuffler
    {
        return new StringShuffler();
    }

}