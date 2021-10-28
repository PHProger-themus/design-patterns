<?php

namespace strategy\classes;

use strategy\interfaces\Strategy;

class Viet implements Strategy
{

    private function getD(int $b, int $c)
    {
        return $b**2 - 4 * $c;
    }

    public function execute(int $a, int $b, int $c): void
    {
        if ($a != 1) {
            echo "Can't solve this equation using Viet theorem <br />";
        } else {
            $D = $this->getD($b, $c);
            echo "Roots are " . ((-1 * $b) + sqrt($D)) / (2 * $a) . " and " . ((-1 * $b) - sqrt($D)) / (2 * $a) . "<br />";
        }
    }

}