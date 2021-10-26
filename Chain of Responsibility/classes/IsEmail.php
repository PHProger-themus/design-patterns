<?php

namespace classes;

class IsEmail extends Validator
{

    public function handle(string $data): void
    {
        if (empty($data) || preg_match("/^[\w-]+([.][\w\-]+)*@[\w\-]+([.][\w\-]+)*$/", $data)) { // Not required, but must be filled in specific way
            parent::handle($data);
        } else {
            die("Field should contain Email address!");
        }
    }

}