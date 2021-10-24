<?php

use classes\Task;
use classes\TaskGroup;

require_once(dirname(__DIR__) . "/autoload.php");

echo "My task list: <br />";

$task1 = new Task("Morning exercise");
$task2 = new Task("Breakfast");

$group1 = new TaskGroup("Job tasks");
$task3 = new Task("Fix <Directory> block in httpd.conf");
$task4 = new Task("2-nd Virtual Host doesn't work, detect the problem");
$task5 = new Task("Configure SSL on example.com");
$group1->add('1', $task3);
$group1->add('2', $task4);
$group1->add('3', $task5);

$task6 = new Task("Have a lunch");

$task7 = new Task("Make custom error pages");
$task8 = new Task("Run Tests");
$task9 = new Task("Go to the store");
$group2 = new TaskGroup("Some more job tasks", [
    '1' => $task7,
    '2' => $task8,
    '3' => $task9 // Oops. we've added one unnecessary task. Removing...
]);
$group2->remove('3');

$task10 = new Task("Watch TV");

$dayGroup = new TaskGroup("Daily tasks", [
    '1' => $task1,
    '2' => $task2,
    '3' => $group1,
    '4' => $task6,
    '5' => $group2,
    '6' => $task9,
    '7' => $task10
]);

// Our day started!

$dayGroup->execute();