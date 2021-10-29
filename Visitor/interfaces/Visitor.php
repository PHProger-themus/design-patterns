<?php

namespace visitor\interfaces;

use composite\classes\TaskGroup;
use memento\classes\User;

interface Visitor
{

    public function exportUser(User $user) : array;

    public function exportComposite(TaskGroup $task_group) : array;

}