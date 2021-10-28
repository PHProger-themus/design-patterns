<?php

namespace State\classes;

use state\interfaces\State;

class Production implements State
{

    private Context $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public function info(): string
    {
        return "Your mode now is \"Production\"<br />";
    }

    public function switchMode(): void
    {
        $this->context->setState(new Development());
    }

    public function run()
    {
        echo "Running in Production mode...<br />";
    }

}