<?php

namespace classes;

use interfaces\TypeAnalyzer;

class ArrayAnalyzer implements TypeAnalyzer
{

    public function analyze($data): void
    {
        $count = count($data);
        echo "Analyzing array. Elements count: $count";
    }

}