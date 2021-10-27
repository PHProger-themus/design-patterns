<?php

require_once(dirname(__DIR__) . "/autoload.php");

$random = new \iterator\classes\RandomArray([1, 2, 3, 4, 5, 'Hello', 'World', 'check' => 'key']);
$iterator = $random->createIterator();
foreach ($iterator as $key => $value) {
    echo "$key : $value <br />";
}