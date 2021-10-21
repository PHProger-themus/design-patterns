<?php

namespace interfaces;

use classes\DB;

interface Builder
{

    public function reset() : void;

    public function setHost(string $host) : static;

    public function setUsername(string $username) : static;

    public function setPassword(string $password) : static;

    public function setDatabase(string $database) : static;

    public function getResult() : DB;

}