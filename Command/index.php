<?php

require_once(dirname(__DIR__) . "/autoload.php");

$DB_changer = new \classes\DBChangerCommand("CREATE TABLE `users`");
$line = "Added new table 'users'";
$logger = new \classes\LoggerCommand($line);
$notifier = new \classes\NotifierCommand($line);

$queue = new \classes\Queue([
    $DB_changer,
    $logger,
    $notifier
]);

// Some code ...

$queue->start(); // Error, cannot CREATE

echo "<br />";
$DB_changer->setSql("INSERT INTO `users`");

$queue->start();