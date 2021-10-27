<?php

namespace composite\classes;

use composite\interfaces\Component;

class Task implements Component
{

    private string $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function execute(): void
    {
        echo "Task: " . $this->text . "<br />";
    }

}