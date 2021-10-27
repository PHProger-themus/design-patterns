<?php

namespace bridge\interfaces;

interface Implementation
{

    public function get(string $table, array $columns = []) : string;

}