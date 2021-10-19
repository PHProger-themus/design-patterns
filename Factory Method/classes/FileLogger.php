<?php

namespace classes;

use interfaces\ServiceInterface;

class FileLogger implements ServiceInterface
{
    public function __construct(private string $filename)
    {}

    public function log(string $message): void
    {
        $log_line = date('Y-m-d H:i:s') . " | $message";
        file_put_contents(dirname(__DIR__) . "/logs/{$this->filename}", $log_line, FILE_APPEND);
    }
}