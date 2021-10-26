<?php

namespace classes;

class Length extends Validator
{

    public function __construct(
       private int $length
    ) {}

    public function handle(string $data): void
    {
        if (empty($data) || strlen($data) >= $this->length) {
            parent::handle($data);
        } else {
            die("Field must be equal or more than {$this->length} symbols!");
        }
    }

}