<?php

namespace command\classes;

use command\interfaces\Command;

class LoggerCommand implements Command
{

    public function __construct(
        private string $line
    ) {}

    public function execute()
    {
        echo "Logging \"{$this->line}\"... <br />";
        $logger = new Logger();
        $logger->log($this->line);
        echo "Done <br />";
    }

}