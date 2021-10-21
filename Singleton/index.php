<?php

require_once(dirname(__DIR__) . "/autoload.php");

$instance = \classes\SingletonChild::getInstance();
$instance->sessionId = rand(111,999);
var_dump($instance);

echo "<br>";

$instance = \classes\Singleton::getInstance();
$instance->title = "I'm Main Singleton";
var_dump($instance);

echo "<br>";

var_dump(\classes\SingletonChild::getInstance(), \classes\Singleton::getInstance());
