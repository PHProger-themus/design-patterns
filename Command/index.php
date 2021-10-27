<?php

require_once(dirname(__DIR__) . "/autoload.php");

$DB_changer = new \command\classes\DBChangerCommand("CREATE TABLE `users`");
$line = "Added new table 'users'";
$logger = new \command\classes\LoggerCommand($line);
$notifier = new \command\classes\NotifierCommand($line);

$queue = new \command\classes\Queue([
    $DB_changer,
    $logger,
    $notifier
]);

// Some code ...

$queue->start(); // Error, cannot CREATE

echo "<br />";
$DB_changer->setSql("INSERT INTO `users`");

$queue->start();