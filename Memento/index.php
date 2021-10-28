<?php

require_once(dirname(__DIR__) . "/autoload.php");

$user = new \memento\classes\User("Bodya", 20, "Backend Web Developer, trying to practice design patterns!");
$caretaker = new \memento\classes\UserStatesStorage($user);
echo $user->getUserInfo();
$state1 = $caretaker->storeState();

$user->setName("Vadim");
echo $user->getUserInfo(); // We've changed name!
$state2 = $caretaker->storeState();

$user->setBio("I'm Java developer");
$user->setAge(25);
echo $user->getUserInfo(); // We've changed age and bio!
$state3 = $caretaker->storeState();

echo "All saved states:<br />";
$caretaker->getStates();

// Let's restore some state

echo "Restoring 1st state: <br />";
$caretaker->restoreByKey($state1);
echo $user->getUserInfo(); // Restored 1st state!
