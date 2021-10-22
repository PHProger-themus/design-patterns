<?php

require_once(dirname(__DIR__) . "/autoload.php");

$manager = new \classes\MySQLBuilder();

$abstraction = new \classes\Abstraction($manager);
$abstraction->getData();
echo "<br />";
$abstraction->getDataWithEscaping();
