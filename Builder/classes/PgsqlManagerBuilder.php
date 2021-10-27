<?php

namespace builder\classes;

use builder\interfaces\Builder;

class PgsqlManagerBuilder extends DatabaseManagerBuilder implements Builder
{

    public function reset(): void
    {
        $this->manager = new PgsqlManager();
    }

}