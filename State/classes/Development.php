<?php

namespace State\classes;

use state\interfaces\State;

class Development implements State
{

    private Context $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    public function info(): string
    {
        return "Your mode now is \"Development\"<br />";
    }

    public function switchMode(): void
    {
        $this->context->setState(new Production());
    }

    public function run()
    {
        echo "Running in Development mode...<br />";
    }

}