<?php

namespace mediator\classes;

class ClassB extends Component
{

    private string $story;
    private string $name;

    public function setStory(string $story)
    {
        $this->story = $story;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStory(): string
    {
        return $this->story;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function tellStory()
    {
        $this->mediator->notify($this, 'story');
    }

    public function greetWorld()
    {
        $this->mediator->notify($this, 'greet');
    }

}