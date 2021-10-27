<?php

namespace command\classes;

use command\interfaces\Command;

class DBChangerCommand implements Command
{

    private string $sql;

    public function __construct(string $sql)
    {
        $this->setSql($sql);
    }

    public function setSql(string $sql): void
    {
        $this->sql = $sql;
    }

    public function execute()
    {
        echo "Executing \"{$this->sql}\"... <br />";
        if (str_starts_with($this->sql, 'CREATE')) {
            return false; // We can't use CREATE commands (testing error case in Queue)
        }
        echo "Done <br />";
    }

}