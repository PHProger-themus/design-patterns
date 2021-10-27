<?php

require_once(dirname(__DIR__) . "/autoload.php");

$instance = \singleton\classes\SingletonChild::getInstance();
$instance->sessionId = rand(111,999);
var_dump($instance);

echo "<br>";

$instance = \singleton\classes\Singleton::getInstance();
$instance->title = "I'm Main Singleton";
var_dump($instance);

echo "<br>";

var_dump(\singleton\classes\SingletonChild::getInstance(), \singleton\classes\Singleton::getInstance());
