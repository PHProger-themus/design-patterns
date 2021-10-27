<?php

namespace classes;

use interfaces\Command;

class Queue
{

    private array $commands;

    public function __construct(array $commands = [])
    {
        $this->commands = $commands;
    }

    public function addCommand(Command $command): void
    {
        $this->commands[] = $command;
    }

    public function start()
    {
        foreach ($this->commands as $command) {
            if ($command->execute() === false) {
                echo "Error in command of class " . get_class($command) . "! Stopping queue... <br />";
                break;
            }
        }
    }

}