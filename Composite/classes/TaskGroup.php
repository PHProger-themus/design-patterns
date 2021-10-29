<?php

namespace composite\classes;

use composite\interfaces\Component;
use visitor\interfaces\Element;
use visitor\interfaces\Visitor;

class TaskGroup implements Component, Element
{

    public function __construct(
        private string $name,
        private array $components = []
    )
    {}

    public function add(string $key, Component $component) {
        $this->components[$key] = $component;
    }

    public function remove(string $key) {
        unset($this->components[$key]);
    }

    public function getStructure() : array
    {
        $tasks = [];
        foreach ($this->components as $component) {
            $tasks[] = $component->getStructure();
        }
        return $tasks;
    }

    public function execute(): void
    {
        echo "<br />=== Task Group \"{$this->name}\" - BEGIN<br /><br />";
        foreach ($this->components as $component) {
            $tasks[] = $component->execute();
        }
        echo "<br />=== Task Group \"{$this->name}\" - END<br /><br />";
    }

    public function accept(Visitor $visitor) : array
    {
        return $visitor->exportComposite($this);
    }

}