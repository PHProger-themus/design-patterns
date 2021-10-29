<?php

require_once(dirname(__DIR__) . "/autoload.php");

//$haystack = "Find me if you can!";
$haystack = [
    "Find",
    "Me",
    "If",
    "You",
    "Can"
];
$needle = "you";

//$searcher = new \template_method\classes\StringSearcher();
$searcher = new \template_method\classes\ArraySearcher();
echo $searcher->search($needle, $haystack);