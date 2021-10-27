<?php

require_once(dirname(__DIR__) . "/autoload.php");

$manager = new \bridge\classes\MySQLBuilder();

$abstraction = new \bridge\classes\Abstraction($manager);
$abstraction->getData();
echo "<br />";
$abstraction->getDataWithEscaping();
