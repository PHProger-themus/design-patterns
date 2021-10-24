<?php

namespace classes;

class Reverser extends Decorator
{

    public function execute(): string
    {
        $password = parent::execute();
        echo "Reversing...<br />";
        return strrev($password);
    }

}