<?php

namespace classes;

class MysqlManager extends DB
{

    public function getDriverInfo() : array
    {
        return array_merge(['driver' => 'MySQL'], parent::getDriverInfo());
    }

    // Methods for MySQL query building ...

}