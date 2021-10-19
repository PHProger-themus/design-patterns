<?php

namespace classes;

use interfaces\ServiceInterface;

class EmailLogger implements ServiceInterface
{
    public function __construct(private string $subject)
    {}

    public function log(string $message): void
    {
        $content = "You've got a new edit on your website: $message";
        mail('admin@example.com', $this->subject, $content);
    }
}