<?php

namespace abstract_factory\classes;

use abstract_factory\interfaces\TypeAnalyzer;

class StringAnalyzer implements TypeAnalyzer
{

    private function getSymbols(string $data) : int {
        return strlen(str_replace(' ', '', $data));
    }

    private function getWords(string $data) : int {
        return count(explode(' ', $data));
    }

    public function analyze($data) : void
    {
        echo "Analyzing string \"$data\". Symbols count: {$this->getSymbols($data)}, words count: {$this->getWords($data)}";
    }

}