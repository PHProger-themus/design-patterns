<?php

namespace classes;

class Salter extends Decorator
{

    private string $salt_begin = "g_4b7$19", $salt_end = ")h6*kl1"; // Can be taken from config or generated

    public function execute(): string
    {
        $password = parent::execute();
        echo "Adding salt...<br />";
        return "{$this->salt_begin}$password{$this->salt_end}";
    }

}