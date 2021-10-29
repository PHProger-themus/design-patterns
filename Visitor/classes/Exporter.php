<?php

namespace visitor\classes;

use composite\classes\TaskGroup;
use memento\classes\User;
use visitor\interfaces\Visitor;

class Exporter implements Visitor
{

    public function exportUser(User $user): array
    {
        return [
            $user->getName(),
            $user->getAge(),
            $user->getBio()
        ];
    }

    public function exportComposite(TaskGroup $task_group): array
    {
        return $task_group->getStructure();
    }

}