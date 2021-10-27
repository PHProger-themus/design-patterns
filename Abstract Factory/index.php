<?php

require_once(dirname(__DIR__) . "/autoload.php");

$factory = new abstract_factory\classes\StringFactory();

$analyzer = $factory->getAnalyzer();
$shuffler = $factory->getShuffler();

// Let's process string variable!

$string = "Hello from Abstract Factory pattern!";
$analyzer->analyze($string);
echo "<br />";
$shuffler->shuffle($string)->getInfo();

// Or array (use ArrayFactory)

//$array = ["First", "Second", "Third"];
//$analyzer->analyze($array);
//echo "<br />";
//$shuffler->shuffle($array)->getInfo();
