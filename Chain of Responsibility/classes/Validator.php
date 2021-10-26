<?php

namespace classes;

abstract class Validator
{

    private self $next_validator;

    public function setNext(self $next_validator) : object {
        $this->next_validator = $next_validator;
        return $next_validator;
    }

    public function handle(string $data) : void {
        if (isset($this->next_validator)) {
            $this->next_validator->handle($data);
        }
    }

}