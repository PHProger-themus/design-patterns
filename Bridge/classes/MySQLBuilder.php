<?php

namespace bridge\classes;

use bridge\interfaces\Implementation;

class MySQLBuilder implements Implementation
{

    public function get(string $table, array $columns = []) : string {
        return "SELECT " . (empty($columns) ? '*' : ' ' . implode(',' ,$columns) . ' ') . "FROM $table";
    }

}