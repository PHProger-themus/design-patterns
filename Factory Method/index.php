<?php

require_once(dirname(__DIR__) . "/autoload.php");

$app_config = [
    // ...
    'logDriver' => 'email',
    // ...
];

$driver = $app_config['logDriver'];
$driverClass = "\\classes\\Init" . ucfirst($driver) . "Logger";
$logger = (new $driverClass())->init("New app log");

// Logger was defined according to configuration, so later in app we can use it to log:

$logger->log("Admin logged in");