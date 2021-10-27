<?php

namespace builder\classes;

class PgsqlManager extends DB
{

    public function getDriverInfo() : array
    {
        return array_merge(['driver' => 'PostgreSQL'], parent::getDriverInfo());
    }

    // Methods for PgSQL query building ...

}