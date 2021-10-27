<?php

namespace classes;

class Logger
{

    public function log(string $message): void
    {
        $log_line = date('Y-m-d H:i:s') . " | $message";
        file_put_contents(dirname(__DIR__) . "/logs/log.txt", $log_line, FILE_APPEND);
    }

}