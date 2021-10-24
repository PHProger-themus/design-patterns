<?php

namespace classes;

use interfaces\Component;

class TaskGroup implements Component
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

    public function execute(): void
    {
        echo "<br />=== Task Group \"{$this->name}\" - BEGIN<br /><br />";
        foreach ($this->components as $component) {
            $component->execute();
        }
        echo "<br />=== Task Group \"{$this->name}\" - END<br /><br />";
    }

}