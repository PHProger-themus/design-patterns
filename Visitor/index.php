<?php

use \composite\classes\Task;
use \composite\classes\TaskGroup;

require_once(dirname(__DIR__) . "/autoload.php");

$exporter = new \visitor\classes\Exporter();

$task_list = new TaskGroup("Check this pattern");
$task1 = new Task("Check User export");
$task2 = new Task("Check Composite export");
$task3 = new Task("Fix bugs if needed");
$task_list->add('1', $task1);
$task_list->add('2', $task2);
$task_list->add('3', $task3);

$user = new \memento\classes\User("Ivan", 35, "Hey, I'm Python programmer, I've learned design patterns!");

// We can export data without knowing what objects we are working with:

$structures = [
    $task_list,
    $user
];

$exported_data = [];
foreach ($structures as $structure) {
    $exported_data[] = $structure->accept($exporter); // Let's export all structures!
}
echo "<pre>";
var_dump($exported_data);
echo "</pre>";