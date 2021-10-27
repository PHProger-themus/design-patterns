<?php

require_once(dirname(__DIR__) . "/autoload.php");

$classA = new \mediator\classes\ClassA();
$classB = new \mediator\classes\ClassB();
$mediator = new \mediator\classes\ClassesMediator($classA, $classB);

$classB->setStory("One day I woke up and went to kitchen to have a breakfast... <br />");
$classB->setName("PHProger");

$classB->tellStory();
$classB->greetWorld();