<?php

namespace State\classes;

use state\interfaces\State;

class Context
{

    private State $state;

    public function __construct(State $state)
    {
        $this->setState($state);
    }

    public function setState(State $state): void
    {
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function info() : string
    {
        return $this->state->info();
    }

    public function switchMode() : void
    {
        $this->state->switchMode();
    }

    public function runApp()
    {
        $this->state->run();
    }

}