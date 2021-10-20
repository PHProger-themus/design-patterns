<?php

namespace classes;

use interfaces\Factory;
use interfaces\TypeAnalyzer;
use interfaces\TypeShuffler;

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