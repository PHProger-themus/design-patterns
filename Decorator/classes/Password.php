<?php

namespace classes;

use interfaces\PasswordInterface;

class Password implements PasswordInterface
{

    private string $password;

    public function __construct()
    {
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_+=?|@#$%^&*()[]{}:";
        $charactersLength = strlen($characters);
        $randomString = "";
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $this->password = $randomString;
    }

    public function execute() : string
    {
        return $this->password;
    }

}