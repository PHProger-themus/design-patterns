<?php

namespace strategy\classes;

use strategy\interfaces\Strategy;

class Discriminant implements Strategy
{

    private function getD(int $a, int $b, int $c)
    {
        return $b**2 - 4 * $a * $c;
    }

    public function execute(int $a, int $b, int $c): void
    {
        $D = $this->getD($a, $b, $c);
        if ($D < 0) {
            echo "There are no roots <br />";
        } elseif ($D == 0) {
            echo "Root is " . (-1 * $b) / (2 * $a) . "<br />";
        } else {
            echo "Roots are " . ((-1 * $b) + sqrt($D)) / (2 * $a) . " and " . ((-1 * $b) - sqrt($D)) / (2 * $a) . "<br />";
        }
    }

}