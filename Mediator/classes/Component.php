<?php

namespace mediator\classes;

use mediator\interfaces\Mediator;

abstract class Component
{

    public function __construct(
        protected ?Mediator $mediator = null
    ) {}

    public function setMediator(Mediator $mediator) : void
    {
        $this->mediator = $mediator;
    }

}