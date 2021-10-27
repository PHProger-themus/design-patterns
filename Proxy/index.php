<?php

require_once(dirname(__DIR__) . "/autoload.php");

function text(\proxy\interfaces\CheckerInterface $checker, string $text) {
    $checker->checkText($text);
}

$text = "Luke Luck likes lakes. Luke's duck likes lakes. Luke Luck licks lakes.";

echo "Without using cache: <br />";
$checker = new \proxy\classes\TextChecker();
text($checker, $text);

echo "<br />With using cache: <br />";
$checker = new \proxy\classes\TextCheckerProxy();
text($checker, $text);
