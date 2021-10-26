<?php

namespace classes;

class Required extends Validator
{

    public function handle(string $data): void
    {
        if (!empty($data)) {
            parent::handle($data);
        } else {
            die("Field is required!");
        }
    }

}