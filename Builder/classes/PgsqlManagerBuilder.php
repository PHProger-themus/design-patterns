<?php

namespace classes;

use interfaces\Builder;

class PgsqlManagerBuilder extends DatabaseManagerBuilder implements Builder
{

    public function reset(): void
    {
        $this->manager = new PgsqlManager();
    }

}