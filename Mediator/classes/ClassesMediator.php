<?php

namespace mediator\classes;

use mediator\interfaces\Mediator;

class ClassesMediator implements Mediator
{

    public function __construct(
        private Component $classA,
        private Component $classB
    ) {
        $this->classA->setMediator($this);
        $this->classB->setMediator($this);
    }

    public function notify(Component $component, string $event): void
    {
        $this->$event($component);
    }

    private function story(Component $component)
    {
        $this->classA->helloWorld();
        echo $component->getStory();
        $this->classA->byeWorld();
    }

    private function greet(Component $component)
    {
        $this->classA->helloWorld();
        echo "Greeting from " . $component->getName();
    }

}