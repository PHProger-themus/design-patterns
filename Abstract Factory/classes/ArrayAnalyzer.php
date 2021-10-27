<?php

namespace abstract_factory\classes;

use abstract_factory\interfaces\TypeAnalyzer;

class ArrayAnalyzer implements TypeAnalyzer
{

    public function analyze($data): void
    {
        $count = count($data);
        echo "Analyzing array. Elements count: $count";
    }

}