<?php

namespace builder\classes;

use builder\interfaces\Builder;

class MysqlManagerBuilder extends DatabaseManagerBuilder implements Builder
{

    public function reset() : void
    {
        $this->manager = new MysqlManager();
    }

}