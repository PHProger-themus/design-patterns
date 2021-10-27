<?php

namespace mediator\interfaces;

use mediator\classes\Component;

interface Mediator
{

    public function notify(Component $component, string $event) : void;

}