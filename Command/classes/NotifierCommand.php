<?php

namespace command\classes;

use command\interfaces\Command;

class NotifierCommand implements Command
{

    public function __construct(
        private string $line
    ) {}

    public function execute()
    {
        echo "You were notified: {$this->line}";
    }

}