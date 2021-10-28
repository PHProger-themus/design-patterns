<?php

require_once(dirname(__DIR__) . "/autoload.php");

$application = new \State\classes\Context(new \State\classes\Development());
$application->runApp();

echo $application->info();
echo "Let's switch the mode!<br />";
$application->switchMode();
echo $application->info();

$application->runApp();
