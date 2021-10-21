<?php

namespace classes;

use interfaces\Builder;

class MysqlManagerBuilder extends DatabaseManagerBuilder implements Builder
{

    public function reset() : void
    {
        $this->manager = new MysqlManager();
    }

}