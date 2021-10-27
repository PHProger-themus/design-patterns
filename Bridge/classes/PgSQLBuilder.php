<?php

namespace bridge\classes;

use bridge\interfaces\Implementation;

class PgSQLBuilder implements Implementation
{

    public function get(string $table, array $columns = []) : string {
        return "SELECT " . (empty($columns) ? '*' : ' ' . implode(',' ,$columns) . ' ') . "FROM `$table`"; // Let's pretend that here is a different implementation of the query
    }

}