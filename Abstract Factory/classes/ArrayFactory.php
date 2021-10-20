<?php

namespace classes;

use interfaces\Factory;
use interfaces\TypeAnalyzer;
use interfaces\TypeShuffler;

class ArrayFactory implements Factory
{

    public function getAnalyzer(): TypeAnalyzer
    {
        return new ArrayAnalyzer();
    }

    public function getShuffler(): TypeShuffler
    {
        return new ArrayShuffler();
    }

}